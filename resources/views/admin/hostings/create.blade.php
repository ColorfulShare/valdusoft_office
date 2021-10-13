@extends('layouts.app')

@push('custom_js')
<script>
    function previewFile(input, preview_id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#" + preview_id).attr('src', e.target.result);
                $("#" + preview_id).css('height', '300px');
                $("#" + preview_id).parent().parent().removeClass('d-none');
            }
            $("label[for='" + $(input).attr('id') + "']").text(input.files[0].name);
            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewPersistedFile(url, preview_id) {
        $("#" + preview_id).attr('src', url);
        $("#" + preview_id).css('height', '300px');
        $("#" + preview_id).parent().parent().removeClass('d-none');

    }
</script>
@endpush

@section('content')
@push('body-atribute')
class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"
@endpush
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
                        <h2 class="content-header-title float-left mb-0">Hosting</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Inicio</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.hostings.list') }}">Hosting</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.hostings.create') }}">Añadir Hosting</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <form class="form" action="{{ route('admin.hostings.store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mb-2">Nuevo Hosting</h3>
                        </div>
                        <div class="card-body pl-3 pr-3">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="url">URL</label>
                                        <input type="text" name="url" id="url" class="form-control" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="create_date">Fecha de inicio</label>
                                        <input type="date" name="create_date" id="create_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="years">Cantidad de años</label>
                                        <select name="years" id="years" class="form-control" required>
                                            <option value="" selected disabled>Seleccione los años para el hosting...</option>
                                            <option value="1" id="years">1 Año</option>
                                            <option value="2" id="years">2 Años</option>
                                            <option value="3" id="years">3 Anos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="user_id">Cliente</label>
                                        <select name="user_id" id="user_id" class="form-control" required>
                                            <option value="" selected disabled>Seleccione un cliente...</option>
                                            @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->name }} {{ $client->last_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="price">Precio</label>
                                        <input type="text" name="price" id="price" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="renewal_price">Precio de Renovacion</label>
                                        <input type="text" name="renewal_price" id="renewal_price" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="cpanel_url">Url Cpanel</label>
                                        <input type="text" name="cpanel_url" id="cpanel_url" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="cpanel_user">Username</label>
                                        <input type="text" name="cpanel_user" id="cpanel_user" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="cpanel_password">password</label>
                                        <input type="password" name="cpanel_password" id="cpanel_password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 alert alert-danger" id="errors_div" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-right">
                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light" id="btn-guardar">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection