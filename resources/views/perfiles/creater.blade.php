@extends('layouts.app')

            

@section('content')
  
   <h1 align="center">Areas de Perfil</h1>

    <form action="{{url('/proyectos')}}" method="POST" id="miForm">
       {{csrf_field()}}
    <!--editad fradev-->
     <!-- Grid row -->
   <!--<div class="form-row">-->
       <!-- Grid column -->
      <!-- <div class="col-md-12">-->
           <!-- Material input -->
          <!-- <div class="md-form form-group">
               <input type="text" class="form-control" id="nombreEst" required name="titulo">
               <label>Nombre del Estudiante</label>
           </div>-->
      <!-- </div>-->
       <!-- Grid column -->

   <!--</div>-->

   <!-- Grid row -->
   <!--<div class="form-row">-->
       <!-- Grid column -->
      <!-- <div class="col-md-12">-->
           <!-- Material input -->
           <!--<div class="md-form form-group">
               <input type="text" class="form-control" id="nombreProy" required name="titulo">
               <label>Nombre del Proyecto</label>
           </div>
       </div>-->
       <!-- Grid column -->

   <!--</div>-->
  
   <!-- Grid row -->
  
   <div class="row">
       <label class="col-sm-6 col-form-label">Area : </label>
       <label class="col-sm-6 col-form-label">Subarea: </label>
       <div class="col-md-6">
            <select class="mdb-select colorful-select dropdown-primary" multiple name="area[]" id="area" required>
                <option active disabled>Seleccionar una Area</option>
                @foreach(($res[2]) as $area)
                       <option value="{{ $area-> idArea}}"> {{ $area-> nombreArea}}</option>
               @endforeach
            </select>
       </div>
       <div class="col-md-6">
           <select class="mdb-select colorful-select dropdown-primary" multiple name="subarea[]" id="subarea" required>
               <option active disabled>Seleccionar una Subarea</option>
               @foreach(($res[4]) as $subarea)
                       <option value="{{ $subarea-> idArea}}"> {{ $subarea-> nombreArea}}</option>
               @endforeach
           </select>
       </div>

       <!--<div class='col-md-4'>
           <input placeholder="Fecha Inicio del Proyecto" type="text" name="fechaIni" class="form-control datepicker">
       </div>
       <div class='col-md-4'>
           <input placeholder="Fecha Fin del Proyecto" type="text" name="fechaFin" class="form-control datepicker">
       </div>-->         
   </div>
   <!---realiz x fradev
   <div class="row">
       <label class="col-sm-6 col-form-label">Carrera: </label>
       <label class="col-sm-6 col-form-label">Subarea Proyecto: </label>
       <div class="col-md-6">
            <select class="mdb-select colorful-select dropdown-primary" multiple name="idCarrera[]" id="carrera" required>
                <option active disabled>Seleccionar una Carrera</option>
                @foreach(($res[3]) as $carrera)
                       <option value="{{ $carrera-> idCarrera}}"> {{ $carrera-> nombreCarrera}}</option>
               @endforeach
            </select>
       </div>
    </div>
    Grid row -->
   
   <div class="form-row">
      

       
  </div>
  <div class="group form-row" style=margin-top:60px;></div>
            <div class="form-row">
            <div class="col-md-8" ></div>
        
            <button type="reset" class="btn btn-red btn-rounded">
                <font color="white" size="3">CANCELAR</font>
			</button>
            <!-- <button class="btn  btn-primary btn-md" id="add">GUARDAR</button> -->
            <button class="btn btn-light-green btn-rounded" id="add">
                <font color="white" size="3">GUARDAR</font>
			</button>
            </div>
</form>

<!--fradev-->
<!-- <div class="tablaScroll5">
    <table class="table table-striped table-sm tablaScroll5">
        <thead>
            <tr>
                <th style="width: 8%" class="text-center">Nro</th>
              	<th style="width: 20%" >NombreArea</th>
                        <!-- <th style="width: 15%" >Nombre</th>
                        <th style="width: 10%" >Telefono</th>
                        <th style="width: 18%" >Carrera</th>
                        <th style="width: 7%" >Proyecto</th>
                        <th style="width: 22%" class="text-center">Herramientas</th> -->
            <!-- </tr>
        </thead>
        <tbody class="tabla1">
        	@foreach($areas as $area)
            <tr data-id="{{ $area->idArea }}">
                <td style="width: 8%" class="text-center">{{ $area->idArea }}</td>
                <td style="width: 20%" >{{ $area->nombreArea }}</td> -->
                <!--<td style="width: 15%" >{{ $estudiante->nombreEst }}</td>
                <td style="width: 10%" >{{ $estudiante->telefono }}</td>
                <td style="width: 18%" >{{ $estudiante->carrera->nombreCarrera }}</td>
                <td style="width: 7%; text-transform: capitalize;" >-->
                <!--@foreach($estudiante->proyecto_estudiante as $pha)
                    {{ $pha->estado }}, 
                @endforeach-->
                <!-- </td>
                <td style="width: 22%" class="text-center">
                	<a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="ver"><i class="fa fa-eye mt-2 ml-1 fa-lg"></i></a>
                	<a class="btn-floating btn-sm btn-blue btn-modal-edit" data-toggle="tooltip" data-placement="top" title="editar"><i class="fa fa-edit mt-2 ml-1 fa-lg"></i></a>
    				<!--<a class="btn-floating btn-sm btn-pink btn-modal-delete" data-toggle="tooltip" data-placement="top" title="eliminar"><i class="fa fa-trash mt-2 ml-1 fa-lg"></i></a>-->
                    <!-- <a class="btn-floating btn-sm btn-light-green" href="/estudiante/{{ $estudiante->idEstudiante }}/proyecto" data-toggle="tooltip" data-placement="top" title="ver proyecto"><i class="fa fa-plus mt-2 ml-1 fa-lg"></i></a> -->
                <!-- </td> -->
            <!-- </tr>
    		@endforeach
        </tbody>
    
    </table> -->
<!-- </div>  -->

@endsection
@section('script')
<script>
   $(document).on('click', '#add', function(e) {
       e.preventDefault();
       $.ajax({
           type: 'POST',
           url: '/proyectos',
           data: {
               '_token': $('input[name=_token]').val(),
               'titulo': $('#nombreProy').val(),
               'area': $('#area').val(),
               'objetivos': $('#objetivos').val(),
               'descripcion': $('#descripcion').val(),
               'periodo': $('#periodo').val(),
               'sesionDeConsejo': $('#sesion').val(),
               'idModalidad': $('#modalidad').val(),
  
               'area': $('#area').val(),
               'subarea': $('#subarea').val(),

            },
            success : function(data) {
                toastr.success(data.message);
                clear();
                location.reload();
                //console.log(data)
            },
            error : function(xhr, status) {
                toastr.error('Disculpe, existio un problema!');
            },
        });
    });
    function clear() 
    {
        document.getElementById("miForm").reset();
    }
</script>

@endsection
