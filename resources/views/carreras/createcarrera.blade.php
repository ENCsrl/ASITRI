@extends('layouts.app')

            

@section('content')
  
   <h1 align="center">Carreras</h1>

    <!-- <form action="createcarrera" method="POST" id="miForm"> -->
       {{csrf_field()}}
   <!--</div>-->  
   <div class="row">
  
   <div class="col-md-6">
        <label class="sr-only" for="search_carrera">Carrera</label>
       <div class="md-form input-group mb-3">
           <input type="text" class="form-control pl-0 rounded-0" id="search_carrera" placeholder="Buscar carrera...">
       </div> 
   </div>
   <div class="col-md-3">
      
   </div>
   <div class="col-md-3">
       <!-- <button type="button" class="btn btn-indigo" id="btn-modal-add" data-toggle="modal" data-target="#modal-estudiante">
           Nuevo Estudiante
       </button> -->
       <button type="button" class="btn btn-cyan btn-rounded" id="btn-modal-add" data-toggle="modal" data-target="#modal-estudiante">
               <font color="white" size="3">Add Carrera</font>
            </button>
   </div>
</div>
<!-- es para mostrar mensaje para cuando hay errores -->
@if($errors->has())
   <script>
       setTimeout(function(){
           toastr.error('ups!, algo salio mal.');
       }, 300);
   </script>
@endif
<hr> 
<div class="tablaScroll5">
    <table class="table table-striped table-sm tablaScroll5">
        <thead>
            <tr>
                <!-- <th style="width: 100%" class="text-center">Carreras</th> -->
              	<th style="width: 20%" >Codigo</th>
              	<th style="width: 70%" >Nombre Carrera</th>
                <th style="width: 10%;" class="text-center">Detalles</th>
              	<!-- <th style="width: 10%" >Telefono</th>
              	<th style="width: 18%" >Carrera</th>
                <th style="width: 7%" >Proyecto</th>
              	<th style="width: 22%" class="text-center">Herramientas</th>   -->
            </tr>
        </thead>
        <tbody class="tabla2">
            @foreach($res[5] as $carrera)
            <tr data-id="{{$carrera->idCarrera}}">
            <td style="width: 20%" >{{$carrera-> idCarrera}}</td>
                <td style="width: 70%" >{{$carrera->nombreCarrera}}</td>
                <!-- <td style="width: 100%; text-transform: capitalize;" > -->
                <td style="width: 10%;" class="text-center">
                    <a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="ver"><i class="fa fa-eye mt-2 ml-1 fa-lg"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <table>
       @foreach(($res[5]) as $carrera)
                       <!-- <option value="{{ $carrera-> idCarrera}}"> {{ $carrera-> nombreCarrera}}</option> -->
                      <!-- {{ $carrera-> nombreCarrera}} </br>
               @endforeach -->
    <!-- </table>  -->
</div>
   <!-- Grid row -->
  
   <!-- <div class="row">
       <label class="col-sm-12 col-form-label">Carrera: </label>
      <!-- <label class="col-sm-6 col-form-label">Subarea Proyecto: </label>-->
       <!-- <div class="col-md-12">
            <select class="mdb-select colorful-select dropdown-primary" multiple name="carrera[]" id="carrera" required>
                <option active disabled>Seleccionar una Carrera</option>
                @foreach(($res[5]) as $carrera)
                       <option value="{{ $carrera-> idCarrera}}"> {{ $carrera-> nombreCarrera}}</option>
               @endforeach
            </select>
       </div> -->
      <!-- <div class="col-md-6">
           <select class="mdb-select colorful-select dropdown-primary" multiple name="subarea[]" id="subarea" required>
               <option active disabled>Seleccionar una Subarea</option>
               @foreach(($res[4]) as $subarea)
                       <option value="{{ $subarea-> idArea}}"> {{ $subarea-> nombreArea}}</option>
               @endforeach
           </select>
       </div>-->

       <!--<div class='col-md-4'>
           <input placeholder="Fecha Inicio del Proyecto" type="text" name="fechaIni" class="form-control datepicker">
       </div>
       <div class='col-md-4'>
           <input placeholder="Fecha Fin del Proyecto" type="text" name="fechaFin" class="form-control datepicker">
       </div>-->         
   <!-- </div>  -->
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
   <!-- <div class="row">
       <!-- Material input -->
      <!-- <label class="col-sm-6 col-form-label">Objetivos:</label>-->
       <!-- <label class="col-sm-6 col-form-label">Descripcion:</label> -->
     <!--<div class="col-sm-6">
           <div class="md-form mt-0">
             <textarea type="text" id="objetivos" class="form-control md-textarea" rows="2" required name="objetivos"></textarea>
           </div>
       </div>-->
       <!-- Material input -->
       <!-- <div class="col-sm-12">
           <div class="md-form mt-0">
             <textarea type="text" id="descripcion" class="form-control md-textarea" rows="2" required name="descripcion"></textarea>
           </div>
       </div> -->
   <!-- </div>  -->
   <!--<div class="form-row">
       <label class="col-md-3">Fecha registro del proyecto:</label>
       <input placeholder="Fecha Registro del Proyecto" type="text" name="fechaRegistro" class="form-control datepicker col-sm-6">
   </div>-->
   
<!-- Modal agregar y modificar estudiante -->
<form method="POST" action="{{url('/createcarrera')}}" id="miForm">
<div class="modal fade" id="modal-estudiante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-notify modal-primary modal-lg" role="document">
       <!--Content-->
       <div class="modal-content">
           <!--Header-->
           <div class="modal-header">
               <p class="heading lead">Carrera</p>
              
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" class="white-text">&times;</span>
               </button>
            </div>
           <!--Body-->
           <div class="modal-body">
              <!-- <p class="red-text">*Obligatorio</p> -->
               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-12">
                       <!-- Material input -->
                       <div class="md-form form-group">
                           <input type="text" class="form-control validate" id="nombreCarrera" placeholder="Ingrese el nombre Carrera">
                           <label for="nombreCarrera">Nombre Carrera <b class="h5 red-text"></b></label>
                       </div>
                   </div>
                </div>
                   <!-- Grid column -->

                   <!-- Grid column -->
                   <!-- <div class="col-md-12">
                       <!-- Material input -->
                       <!-- <div class="md-form form-group">
                           <input type="text" class="form-control validate" id="apellidos" placeholder="Apellidos">
                           <label for="apellidos">Apellidos <b class="h5 red-text">*</b></label>
                       </div> -->
                   <!-- </div> --> 
                   <!-- Grid column -->
               
               <!-- Grid row -->

               <!-- Grid row -->
               <!-- <div class="row">
                   <!-- Grid column -->
                   <!-- <div class="col-md-6">
                       <!-- Material input -->
                       <!-- <div class="md-form form-group"> -->
                           <!-- <input type="text" class="form-control validate" id="ci" placeholder="CI">
                           <label for="ci">CI <b class="h5 red-text">*</b></label> -->
                       <!-- </div>
                   </div> --> 
                   <!-- Grid column -->

                   <!-- Grid column -->
                   <!-- <div class="col-md-6">
                       <!-- Material input -->
                       <!-- <div class="md-form form-group">
                            <input type="number" class="form-control validate" id="telefono" placeholder="Telefono">
                            <label for="telefono">Telefono <b class="h5 red-text">*</b></label> -->
                       <!-- </div>
                   </div> --> 
                   <!-- Grid column -->
               <!-- </div>  -->
               <!-- Grid row -->

               <!-- Grid row -->
               <!-- <div class="form-row"> -->
                   <!-- Grid column -->
                   <!-- <div class="col-md-6"> -->
                       <!-- Material input -->
                       <!-- <div class="md-form form-group">
                           <input type="email" class="form-control validate" id="email" placeholder="Email">
                           <label for="email">Email <b class="h5 red-text">*</b></label>
                       </div>
                   </div> -->
                   <!-- Grid column -->

                   <!-- Grid column -->
                   <!-- <div class="col-md-6"> -->
                       <!-- Material input -->
                       <!-- <div class="md-form form-group" id="carreradiv">
                            <select class="mdb-select colorful-select dropdown-primary col-md-12" id="carrera">
                               <option value="selected disabled" selected disabled>Seleccionar una opcion</option>
                               <option value="2">Ingenieria en Sistemas</option>
                               <option value="1">Ingenieria Informatica</option>
                               <option value="3">Ingenieria Industrial</option>
                           </select>
                           <label for="carrera">Carrera <b class="h5 red-text">*</b></label>
                       </div> -->
                   <!-- </div> -->
                   <!-- Grid column -->
               <!-- </div> -->
               <!-- Grid row -->
               
               <!-- Grid row -->                
           </div> 
          
           <!--Footer-->
           <div class="modal-footer">
               <button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
               <button class="btn btn-indigo" id="addCarr">Guardar</button>
               <!-- <button class="btn btn-indigo" id="addCarr" type="submit"></button> -->
           </div>

           <!-- <td style="width: 20%" >{{ $carrera->idCarrera }}</td> -->
       </div>
       <!--/.Content-->
   </div>
</div>
</form>
     <!-- añadir a la base de datos la carrera -->
     
<!-- Hasta Aqui fradev -->
  <!-- <div class="group form-row" style=margin-top:60px;></div> -->
        <!-- <div class="form-row">
            <div class="col-md-8" ></div>
        
            <button type="reset" class="btn btn-red btn-rounded">
                <font color="white" size="3">CANCELAR</font>
			</button>
            <!-- <button class="btn  btn-primary btn-md" id="add">GUARDAR</button> -->
            <!-- <button class="btn btn-light-green btn-rounded" id="add">
                <font color="white" size="3">GUARDAR</font>
			</button> -->
           <!-- <button type="submit" class="btn btn-primary"> Crear  </button>-->
            <!-- </div>  -->
<!-- </form> -->


<!-- @endsection -->
<!-- @section('script')
<script>
   $(document).on('click', '#add', function(e) {
       e.preventDefault();
       $.ajax({
           type: 'POST',
           url: '/create/carreras',
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
    // funcion de añadir las carrera a la base de datos
    // SCRIPT PARA AGREGAR ESTUDIANTE EN EL MODAL
   $(document).on('click', '#modal-agregar-btn', function(e) {
       e.preventDefault();
       $.ajax({
        //    type: type_,
        //    url: url_,
        //    data: {
            type: 'POST',
            url:' /createcarrera',
            data: {
               '_token': $('input[name=_token]').val(),
            //    'ciEst': $('#ci').val(),
            //    'nombreEst': $('#nombre').val(),
            //    'apellidoEst': $('#apellidos').val(),
            //    'emailEst': $('#email').val(),
            //    'telefono': $('#telefono').val(),
               'nombreCarrera': $('#carrera').val(),
           },
           success : function(data) {
              //console.log(data);
               toastr.success(data.message);
               location.reload();
           },
           error : function(xhr, status) {
               toastr.error('Disculpe, existio un problema!');
           },
       });
       $('#modal-estudiante').modal('hide');
       clear();
   });
</script>-->

@endsection
@section('script')
<script>
 $(document).on('click', '#btn-modal-add', function(e) {
       type_ = 'POST';
       url_ = '/createcarrera';
       $('#nombreCarrera').val('');
   });
   $(document).on('click','#addCarr' function(e) {
       e.preventDefault();
       $.ajax({
           type: type_,
           url: url_,
           data: {
             '_token': $('input[name=_token]').val(),
               'nombreCarrera': $('#nombreCarrera').val(),
            //    'area': $('#area').val(),
            //    'objetivos': $('#objetivos').val(),
            //    'descripcion': $('#descripcion').val(),
            //    'periodo': $('#periodo').val(),
            //    'sesionDeConsejo': $('#sesion').val(),
            //    'idModalidad': $('#modalidad').val(),
  
            //    'area': $('#area').val(),
            //    'subarea': $('#subarea').val(),

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
       // $('#modal-estudiante').modal('hide');
        clear();
    }); 
  
</script>
<!-- <script>
    var row_tr = null;
    var type_ = null;
    var url_ = null;
// SCRIPT PARA MOSTRAR ESTUDIANTE EN EL MODAL

   // SCRIPT PARA AGREGAR ESTUDIANTE EN EL MODAL
   $(document).on('click', '#btn-modal-add', function(e) {
       type_ = 'POST';
       url_ = '/createcarrera';
    //    $('#ci').val('');
       $('#nombreCarrera').val('');
    //    $('#apellidos').val('');
    //    $('#email').val('');
    //    $('#telefono').val('');
    //    $('#carreradiv').removeAttr('hidden');
   });
   // SCRIPT PARA AGREGAR ESTUDIANTE EN EL MODAL
   $(document).on('click', '#modal-agregar-btn', function(e) {
       e.preventDefault();
       $.ajax({
           type: type_,
           url: url_,
           data: {
               '_token': $('input[name=_token]').val(),
            //    'ciEst': $('#ci').val(),
               'nombreCarrera': $('#nombre').val(),
            //    'apellidoEst': $('#apellidos').val(),
            //    'emailEst': $('#email').val(),
            //    'telefono': $('#telefono').val(),
            //    'idCarrera': $('#carrera').val(),
           },
           success : function(data) {
              //console.log(data);
               toastr.success(data.message);
               location.reload();
           },
           error : function(xhr, status) {
               toastr.error('Disculpe, existio un problema!');
           },
       });
       $('#modal-estudiante').modal('hide');
       clear();
   });

   // SCRIPT PARA ELIMINAR ESTUDIANTE EN EL MODAL FRADEV
   function clear(){
       row_tr = null;
       type_ = null;
       url_ = null;
   }
   $(document).ready(function(){
         $("#search_carrera").on("keyup", function() {
           var value = $(this).val().toLowerCase();
           $(".tabla1 tr").filter(function() {
             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
           });
         });
       });
       $(document).ready(function(){
         $("#search_carrera").on("keyup", function() {
           var value = $(this).val().toLowerCase();
           $(".tabla2 tr").filter(function() {
             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
           });
         });
       });
</script>--> 
@endsection
