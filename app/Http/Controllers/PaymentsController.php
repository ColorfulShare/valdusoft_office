<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Payments;

class PaymentsController extends Controller
{
    /** Listado de Pagos
    *** Perfil: Admin ***/
    public function list(){
        if (Auth::user()->profile_id == 1){
            $payments = payments::where('user_id', '=', Auth::user()->id)->paginate(10);
            return view('admin.payments.list')->with('payments', $payments);
        }

    }

    public function bill(){
        return view('admin.payments.billpayment');    
    }
}
