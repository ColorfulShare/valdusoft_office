<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use App\Models\Hosting;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    /** Home del Cliente
     *** Perfil: Cliente ***/
    public function index()
    {
        $clients = Bill::all()->where('type', 'C');
        $hostings = Hosting::paginate(10);
        $projects = Project::paginate(10);
        return view('client.home')->with(compact('clients', 'hostings', 'projects'));
    }


    /** Listado de Clientes
     *** Perfil: Admin ***/
    public function list()
    {
        $client = User::where('profile_id', '=', 2)
                    // ->where('status', '1')
                    ->orderBy('name', 'ASC')
                    ->paginate(10);
                    

        return view('admin.clients.list')
            ->with('client', $client);
    }

    /** Crear Nuevo Cliente
     *** Perfil: Admin ***/
    public function create()
    {
        $skills = DB::table('skills')
            ->orderBy('skill', 'ASC')
            ->get();

        return view('admin.clients.create')->with(compact('skills'));
    }

    //detalle del proyecto
    public function show(Request $request, $slug, $id)
    {
        $client = User::where('id', '=', $id)
            ->first();
        $client_bill = Bill::where('user_id', $request->id)->paginate(10);

        $projects = Project::where('user_id', $request->id)->paginate(5);

        $hosting = Hosting::all()->where('user_id', $request->id);

        return view('admin.clients.show')
            ->with(compact('client', 'client_bill', 'hosting', 'projects'));
    }

    /** Guardar Datos del Nuevo Cliente
     *** Perfil: Admin ***/
    public function store(Request $request)
    {
        $msj = [
            'name.required' => 'El nombre es requerido.',
            'name.max' => 'El nombre debe tener como máximo 50 caracteres.',
            'last_name.required' => 'El apellido es requerido.',
            'last_name.max' => 'El apellido debe tener como máximo 50 caracteres.',
            'email.unique' => 'El correo ya se encuentra registrado.',
            'phone' => 'El teléfono es requerido',
            'photo.mimes' => 'Archivos no permitido, solo jpeg, jpg y png',
            'photo.max' => 'La imagen no debe ser mayor de 2048 Kilobytes',
            'logo.mimes' => 'Archivos no permitido, solo jpeg, jpg y png',
            'logo.max' => 'La imagen no debe ser mayor de 2048 Kilobytes'
        ];
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:18'],
            'password' => ['required', 'string', 'min:6'],
            'photo' => ['nullable', 'mimes:jpeg,png', 'max:2048'],
            'logo' => ['nullable', 'mimes:jpeg,png', 'max:2048']
        ], $msj);


        if ($validate) {
            $client = new User($request->all());
            $client->slug = Str::slug($request->name . "-" . $request->last_name);
            $client->profile_id = 2;
            $client->password = Hash::make($request->password);
            $client->save();
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $name = $client->id . "." . $file->getClientOriginalExtension();
                $file->move(public_path('storage') . '/uploads/images/users/photos', $name);
                $client->photo = 'uploads/images/users/photos/' . $name;
            }
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $name = $client->id . "." . $file->getClientOriginalExtension();
                $file->move(public_path('storage') . '/uploads/images/users/logos', $name);
                $client->logo = 'uploads/images/users/logos/' . $name;
            }
            $client->save();
        }

        return redirect()->route('admin.clients.list')->with('message', 'Se creo el Cliente Exitosamente');
    }

    /** Editar datos de un Cliente
     *** Perfil: Admin ***/
    public function edit($id)
    {
        $client = User::find($id);

        return view('admin.clients.edit')
            ->with('client', $client);
    }

    /** Guardar datos modificados de un Cliente
     *** Perfil: Admin ***/
    public function update(Request $request, $id)
    {
        // dd($request);
        $client = User::find($id);
        $msj = [
            'name.required' => 'El nombre es requerido.',
            'name.max' => 'El nombre debe tener como máximo 50 caracteres.',
            'last_name.required' => 'El apellido es requerido.',
            'last_name.max' => 'El apellido debe tener como máximo 50 caracteres.',
            'email.unique' => 'El correo ya se encuentra registrado.',
            'phone' => 'El teléfono es requerido',
            'photo.mimes' => 'Archivos no permitido, solo jpeg, jpg y png',
            'photo.max' => 'La imagen no debe ser mayor de 2048 Kilobytes',
            'logo.mimes' => 'Archivos no permitido, solo jpeg, jpg y png',
            'logo.max' => 'La imagen no debe ser mayor de 2048 Kilobytes'
        ];
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $client->id . ',id'],
            'phone' => ['required', 'string', 'max:18'],
            'photo' => ['nullable', 'mimes:jpeg,png', 'max:2048'],
            'logo' => ['nullable', 'mimes:jpeg,png', 'max:2048']
        ], $msj);

        if ($validate) {
            $client->slug = Str::slug($request->name . "-" . $request->last_name);
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $name = $client->id . "." . $file->getClientOriginalExtension();
                $file->move(public_path('storage') . '/uploads/images/users/photos', $name);
                $client->photo = 'uploads/images/users/photos/' . $name;
                // dd($client->photo);
            }
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $name = $client->id . "." . $file->getClientOriginalExtension();
                $file->move(public_path('storage') . '/uploads/images/users/logos', $name);
                $client->logo = 'uploads/images/users/logos/' . $name;
            }
            $client->save();
            $client->update($request->all());
            return redirect()->route('admin.clients.list')->with('message', 'Se actualizó el Cliente Exitosamente');
        }
    }

    /** Eliminar un Cliente
     *** Perfil: Admin ***/
    public function delete(Request $request)
    {
        $client = User::find($request->id);
        $client->status = '1';
        $client->save();

        return redirect()->route('admin.clients.list')->with('message', 'Se elimino el Cliente' . ' ' . $client->client . ' ' . 'Exitosamente');
    }
}
