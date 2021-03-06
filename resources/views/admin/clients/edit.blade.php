@extends('layouts.app')

@section('content')

@include('layouts.partials.navbar')

@include('layouts.partials.sidebar')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">

            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Cliente</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Inicio</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.clients.list') }}">Cliente</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.clients.edit', $client->id) }}">Editar Cliente</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row d-flex justify-content-center mt-5 pb-3">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Editando el cliente <span class="text-primary font-weight-bold">{{ $client->name }}</span></h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('admin.clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="h5" for="name">Nombre</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" class="form-control" name="name" value="{{ $client->name }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="h5" for="lastname">Apellido</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" class="form-control" name="lastname" value="{{ $client->lastname }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="h5" for="email">Email</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="email" class="form-control" name="email" value="{{ $client->email }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-globe"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="h5" for="phone">Telefono</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="text" class="form-control" name="phone" value="{{ $client->phone }}">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-12">
                                            <fieldset>
                                                <label class="h5" for="due_date">Imagen para el Cliente</label>
                                                <div class="media">
                                                    <div class="custom-file">
                                                        <label class="custom-file-label" for="photo"><b>Seleccione una imagen para el Cliente</b></label>
                                                        <input type="file" id="photo" class="custom-file-input @error('photo') is-invalid @enderror" name="photo" onchange="previewFile(this, 'photo_preview')" accept="image/*">
                                                        @error('photo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-4 mt-4 d-none" id="photo_preview_wrapper">
                                                    <div class="col"></div>
                                                    <div class="col-auto">
                                                        @if (!is_null($client->photo))
                                                        <img id="photo_preview" class="img-fluid rounded" src="{{ $client->photo }}" />
                                                        @else
                                                        <img id="photo_preview" class="img-fluid rounded" src="{{ asset('images/valdusoft/valdusoft.png') }}" />
                                                        @endif
                                                    </div>
                                                    <div class="col"></div>
                                                </div>

                                            </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Editar</button>
                                            <a href="{{ route('admin.clients.list') }}" class="btn btn-outline-danger mr-1 mb-1 waves-effect waves-light">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection