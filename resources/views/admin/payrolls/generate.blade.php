@extends('layouts.app')

@push('body-atribute')
class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"
@endpush

@section('content')

@include('layouts.partials.navbar')

@include('layouts.partials.sidebar')
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper">
    <div class="content-header row"> </div>

    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Nóminas</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="fas fa-home"></i></a>
              </li>
              <li class="breadcrumb-item"><a href="{{ route('admin.payrolls.list') }}">Financiero</a>
              </li>
              <li class="breadcrumb-item"><a href="{{ route('admin.payrolls.list') }}">Nómina</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="content-body">
    <div id="table-head table-responsive">
      <div class="col-11" style="margin-left:15px">

        <div class="card" id="card-head1">


        <form action="{{ route('admin.payrolls.upgenerate') }}" method="post">
        @csrf
          <div class="ml-1 mt-2 mb-2 flex-nowrap">
            <p class="h6">Fecha de inicio</p>
            <input type="date" class="col-4 form-control" name="date" required>
          </div>
          <div class="ml-1 mt-2 mb-2 flex-nowrap">
            <p class="h6">Fecha de Cierre</p>
            <input type="date" class="col-4 form-control" name="fecha_de_cierre" required>
          </div>


          <div class="card-header">
            <h3 class="card-title mb-1">Empleados</h3>
          </div>

          <div class="card-content">
            <div class="table-responsive">
              <table class="table mb-0">
                <thead class="thead-light ">

                  <tr>
                    <th>NOMBRE</th>
                    <th class="col-3">CANT. DE HORA</th>
                    <th class="col-2">COSTO DE HORA</th>
                    <th>TOTAL</th>
                    <th>BONO</th>
                    <th>PRESTAMO</th>
                  </tr>
                </thead>

                <tbody>
                @php $cont = 0; @endphp
                  @foreach ($employees as $employee)
                    @php $cont++; @endphp
                    <input type="hidden" name="employees_count" value="{{ $cont }}">
                    <input type="hidden" name="employee_id_{{ $cont }}" value="{{ $employee->id }}">
                  <tr>
                    <td scope="row">{{$employee->name}}</td>

                    <td>
                      
                  <input type="text" name="price_by_hour_{{ $cont }}" id="nombre_{{ $cont }}" class="col-7 form-control">
                      
                    </td>

                    <td id="valor_nombre_{{ $cont }}" oninput="cambio(0)" class="text-center">{{$employee->price_per_hour}}</td>

                    <td><input type="text" name="total_hours_{{ $cont }}"  class="col-7 form-control">
                    </td>

                    <td><a href="#bono" data-toggle="modal">
                        <img class="rounded-circle" src="{{ asset('images/icons/plus-circle.png')}}" alt="Agregar Tecnología" height="40" width="40"></td>
                        
                    <td><a href="#prestamo" data-toggle="modal">
                        <img class="rounded-circle" src="{{ asset('images/icons/plus-circle.png') }}" alt="Agregar Tecnología" height="40" width="40"></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </table>
              <br>

              <div class="bottom float-right" style="margin-right:20px;">

                <button type="submit" class="btn  btn-primary ">GENERAR</button>
              </form>

                <br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  MODAL DE LOS BONOS  -->

      <div class="modal fade" id="bono" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-footer">
              <button class="close" data-dismiss="modal">&times;</button> 
            </div>
            <div class="modal-body">
              <p>Monto a Ingresar</p>
              <input type="text" class=" form-control">
              <br>
              <p>Concepto</p>
              <input type="text" class=" form-control">
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-toggle="modal" data-dismiss="modal">GUARDAR</button>
            </div>
          </div>
        </div>
      </div>

      <!--  MODAL DE LOS PRESTAMOS  -->
      <div class="modal fade" id="prestamo" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-footer">
              <button class="close" data-dismiss="modal">&times;</button>

            </div>

            <div class="modal-body">
              <p>Valor del Prestamo</p>
              <input type="text" class=" form-control">
              <br>
              <p>Porcentaje a descontar</p>
              <input type="text" class=" form-control">

            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-toggle="modal" data-dismiss="modal">GUARDAR</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection