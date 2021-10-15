@extends('layouts.app')

@push('body-atribute')
   class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns"
@endpush

@push('scripts')
   <script>
      $(".hours").on("change", function(){
         let id = $(this).attr("id").split("_");

         let total = parseFloat($("#price_per_hour_"+id[1]).val()) * parseFloat($("#hours_"+id[1]).val());
         $("#data_total_"+id[1]).html(total+"$");
         $("#total_"+id[1]).val(total);
      });
   </script>
@endpush

@section('content')
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
                        <li class="breadcrumb-item"><a href="#">Financiero</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.payrolls.list') }}">Nómina</a>
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>

      {{-- Pestaña generar Nomina --}}
      <div class="content-body">
         <div id="table-head table-responsive">
            <div class="col">
               <div class="card" id="card-head1">
                  <form action="{{ route('admin.payrolls.store') }}" method="post">
                     @csrf
                     <div class="row p-2">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                           <label for="date">Fecha de inicio</label>
                           <input type="date" class="form-control" name="start_date" required>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                           <label for="dead_line">Fecha de cierre</label>
                           <input type="date" class="form-control" name="dead_line" required>
                        </div>
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
                                    <th>CANT. DE HORAS</th>
                                    <th>COSTO DE HORA</th>
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
                                       <td scope="row">{{ $employee->name }} {{ $employee->last_name }}</td>
                                       <td>   
                                          <input type="text" name="hours_{{ $cont }}" id="hours_{{ $cont }}" class="col-7 form-control hours" @if (is_null($employee->price_per_hour)) disabled @endif>  
                                       </td>
                                       <td>
                                          <input type="hidden" name="price_per_hour_{{ $cont }}" id="price_per_hour_{{ $cont }}" value="{{$employee->price_per_hour}}$">
                                          @if (is_null($employee->price_per_hour))
                                             Dato no disponible
                                          @else
                                             <b>{{$employee->price_per_hour}}$</b>
                                          @endif
                                       </td>
                                       <td>
                                          <input type="hidden" name="total_{{ $cont }}" id="total_{{ $cont }}">
                                          <b id="data_total_{{ $cont }}">0$</b>
                                       </td>
                                       <td>
                                          <a href="#bono" data-toggle="modal">
                                             <img class="rounded-circle" src="{{ asset('images/icons/plus-circle.png')}}" alt="Agregar Tecnología" height="40" width="40">
                                          </a>
                                       </td>    
                                       <td>
                                          <a href="#prestamo" data-toggle="modal">
                                             <img class="rounded-circle" src="{{ asset('images/icons/plus-circle.png') }}" alt="Agregar Tecnología" height="40" width="40">
                                          </a>
                                       </td>
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                           <br>
                           <div class="bottom float-right" style="margin-right:20px;">
                           <button type="submit" class="btn  btn-primary ">GENERAR</button>
                           </div> 
                           <br><br>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--  MODAL DE LOS BONOS  -->
   <div class="modal fade" id="bono" aria-hidden="true" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel"><strong>Generar Bono </strong></h5>
            <button class="close" style="margin-right:10px; margin-top:1px;" data-dismiss="modal">&times;</button>
         </div>  
         <form action="{{ route('admin.payrolls.generatebond')}}" method="post">
            @csrf  
            <div class="modal-body"> 
            <p>Monto a Ingresar</p>
            <input type="text" class=" form-control" name="amount" id="amount">
            <br>
            <p>Concepto</p>
            <input type="text" class=" form-control" name="description" id="description">
            <div class="modal-footer">
               <button class="btn btn-primary" type="submit" id="bono" >GUARDAR</button>
            </div>
         </form>
      </div>
      </div>
   </div>

   <!--  MODAL DE LOS PRESTAMOS  -->
   <div class="modal fade" id="prestamo" aria-hidden="true" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel"><strong>Generar Prestamo </strong></h5>
            <button class="close" style="margin-right:10px; margin-top:1px;" data-dismiss="modal">&times;</button>
         </div>
         <form action="{{ route('admin.payrolls.generateloan')}}" method="post">
            @csrf
            <div class="modal-body">
            <label for="total_amount">Valor del Prestamo</label>
            <input type="text" class=" form-control" id="total_amount" name="total_amount">
            <br>
            <label for="percentage">% a descontar del sueldo</label>
            <input type="text" class=" form-control" id="percentage" name="percentage">
            </div>
            <div class="modal-footer">
            <button class="btn btn-primary" type="submit" id="prestamo" >GUARDAR</button>
            </div>
         </form>
      </div>
      </div>
   </div>
@endsection