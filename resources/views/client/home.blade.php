@extends('layouts.app')

@push('body-atribute')
class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"
@endpush
 <style>
  .container-x {
    font-size: calc(1em + 1vw);
    width: 100%;
   }
</style>

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body mb-5 mt-2">
            <div class="card">
                <div class="mb-1 mt-1">
                    <h3>Proyectos</h3>
                </div>
                <div class="card">
                    <div class="container">
                        <div class="row ">
                            @foreach ($projects as $project)
                            <div class="container-fluid col-md-2 col-sm-1 rounded" id="recomiendo">
                                <img src="{{asset('images/figma/recomiendo.png')}}" class="mt-2" alt="" style="width:100%;">
                                <div class="pr-1 mt-2 h4 pb-2 text-center text-white" id="shadow">
                                    <div style="position: relative;top: 14px;">{{$project -> name}}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="">
                <h3 class="card-title mb-2 pt-2">Facturas</h3>
                <div class="table-responsive ">
                    <table class="table">
                        <thead class="thead-light ">
                            <th class="">FECHA</th>
                            <th class="text-center">ESTADO</th>
                            <th class="text-center">DESCRIPCIÓN</th>
                            <th class="text-center">MONTO</th> 
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td class="">{{ date('d-m-Y', strtotime($client->date ) )}}</td>
                                <td class="text-center">
                                    @if ($client->status == 0)
                                     <label class="label status-label status-label-purple">Pendiente</label>
                                    @elseif ($client->status == 1)
                                     <label class="label status-label status-label-gray">Pagada</label>
                                    @endif
                                </td>
                                <td class="text-center"></td>
                                <td class="text-center">{{ $client->amount }}$</td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <div class="content-body">
            <div class="card">
                <div class="">
                    <h3 class="card-title mb-2 pt-2">Hosting</h3>
                    <div class="container">
                        <div class="row">
                            @foreach ($hostings as $hostings)
                                <div class="card-body rounded" id="position" style="background: #252856;">
                                  <div class="p-1">
                                    <img class="float-right" src="{{asset('images/icons/background.png')}}" alt="">
                                    <h5 class="card-title text-white">{{$hostings->url}}</h5>
                                    <br>
                                    <p class="card-text h6 text-white">Fecha de renovación</p>
                                    <br>
                                    <p class="h4 text-white"><i class="far fa-calendar icon-big mr-1"></i>{{ date('d-m-Y', strtotime($hostings->updated_at ) )}}</p>
                                  </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>  
@endsection