@extends('layouts.app')
@section('content')
{{ csrf_field() }}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <h1 class="text-center">Docentes & Profesionales</h1>
   <h2 class="text-center">Docentes</h2>

   <div class="row">
     
        <div class="col-md-6">
 	           
               <label class="sr-only" ></label>
               <div class="md-form input-group mb-3">
               <input type="text" class="form-control pl-0 rounded-0" id="Search1" type="text" placeholder="Buscar Docentes...">
               </div>
 	   </div>      
       <div class="col-md-2" ></div>
       <div class="col-md-4">
           <button class="btn btn-cyan btn-rounded">
               <a href="/docenteNuevo"><font color="white" size="3">Nuevo Docente/Profesional</font></a>
            </button>
      
 	</div>

    <div class="tablaScroll4">
        <table class="table table-striped tablaScroll4">
     	 <thead>
     	   <tr>
     	     <th style="width: 10%" class="text-center"><font size="3">CI</font></th>
     	     <th style="width: 20%" class="text-center"><font size="3">Nombre Docente</font></th>
     	     <th style="width: 50%" class="text-center"><font size="3">Areas</font></th>
     	     <th style="width: 5%" class="text-center"><font size="3">Trib</font></th>
             <th style="width: 5%" class="text-center"><font size="3">Tut</font></th>
     	     <th style="width: 10%" class="text-center"><font size="3">Detalles</font></th>

     	   </tr>
     	 </thead>
     	 <tbody id="table1">
     	   @foreach($docentes as $docente)
           <tr data-id="{{ $docente->idDoc }}">
 	           <td style="width: 10%" class="text-center"> {{ $docente->ciDoc }} </td>
 	           <td style="width: 20%" class="text-center"> {{ $docente->apePaternoDoc }} {{ $docente->apeMaternoDoc }} {{ $docente->nombreDoc }} </td>
 	           <td style="width: 50%" class="text-center">
               @foreach($docente->tiene as $pha)
                   {{ $pha->area->nombreArea }},
               @endforeach
    
               </td>
 	           <td style="width: 5%" class="text-center">{{ $docente->cantTrib }}</td>
               <td style="width: 5%" class="text-center">{{ $docente->cantTut }}</td>
 	           <td style="width: 10%" class="text-center">
 	               <a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="ver"><i class="fa fa-eye mt-2 ml-1 fa-lg"></i></a>
 	           </td>
           </tr>
           @endforeach
     	 </tbody>
        </table>
   </div>
   </div>

   <div class="group form-row" style=margin-top:60px;></div>
   <h2 class="text-center">Profesionales</h2>

   <div class="row">
        <div class="col-md-6">
       <label class="sr-only" ></label>
               <div class="md-form input-group mb-3">
 	           <input class="form-control pl-0 rounded-0" id="Search2" type="text" placeholder="Buscar Profesionales...">  
 	   </div>   
       </div>  
       <div class="col-md-2" >
    </div>

   <div class="tablaScroll4">
        <table class="table table-striped tablaScroll4">
     	 <thead>
     	   <tr>
     	     <th style="width: 10%" class="text-center"><font size="3">Codigo</font></th>
     	     <th style="width: 20%" class="text-center"><font size="3">Nombre Profesional</font></th>
     	     <th style="width: 50%" class="text-center"><font size="3">Areas</font></th>
     	     <th style="width: 5%" class="text-center"><font size="3">Trib</font></th>
             <th style="width: 5%" class="text-center"><font size="3">Tut</font></th>
     	     <th style="width: 10%" class="text-center"><font size="3">Detalles</font></th>

     	   </tr>
     	 </thead>
     	 <tbody id="table2">
     	   @foreach($profesionales as $profesional)
           <tr data-id="{{ $profesional->idDoc }}">
 	           <td style="width: 10%" class="text-center"> {{ $profesional->ciDoc }} </td>
 	           <td style="width: 20%" class="text-center"> {{ $profesional->apePaternoDoc }} {{ $profesional->apeMaternoDoc }} {{ $profesional->nombreDoc }} </td>
 	           <td style="width: 50%" class="text-center">
               @foreach($profesional->tiene as $pha)
                   {{ $pha->area->nombreArea }},
               @endforeach
               </td>

 	           <td style="width: 5%" class="text-center">{{ $profesional->cantTribP }}</td>
               <td style="width: 5%" class="text-center">{{ $profesional->cantTutP }}</td>
 	           <td style="width: 10%" class="text-center">
 	               <a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="ver"><i class="fa fa-eye mt-2 ml-1 fa-lg"></i></a>
 	           </td>
           </tr>
           @endforeach
     	 </tbody>
        </table>
   </div>
   </div>


<div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-notify modal-info modal-lg" role="document">
       <!--Content-->
       <div class="modal-content">
           <!--Header-->
           <div class="modal-header">
               <p class="heading lead">Docente</p>
              
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" class="black-text">&times;</span>
               </button>
           </div>
          
           <!--Body-->
           <div class="modal-body">
               <!-- Grid row -->
               <div class="form-row">
                   <!-- Grid column -->
                   <div class="col-md-12">
                       <table class="table table-bordered">
                           <tbody>
                               <tr>
                                   <th scope="row">CI : </th>
                                   <td id="td-ci"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Apellidos : </th>
                                   <td id="td-apellido"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Nombres : </th>
                                   <td id="td-nombre"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Email : </th>
                                   <td id="td-email"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Telefono : </th>
                                   <td id="td-telefono"></td>
                               </tr>
                              
                               <tr>
                                   <th scope="row">Carga Horaria : </th>
                                   <td id="td-cargahoraria"></td>
                               </tr>
                               <tr>
                                   <th scope="row">Titulo Docente : </th>
                                   <td id="td-titulo"></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->             
           </div>
           <!--Footer-->
           <div class="modal-footer">
               <button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
           </div>
       </div>
       <!--/.Content-->
   </div>
</div>
    
    <script>
        $(document).ready(function(){
     	 $("#Search1").on("keyup", function() {
     	   var value = $(this).val().toLowerCase();
     	   $("#table1 tr").filter(function() {
     	     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
     	   });
     	 });
        });

       $(document).ready(function(){
     	 $("#Search2").on("keyup", function() {
     	   var value = $(this).val().toLowerCase();
     	   $("#table2 tr").filter(function() {
     	     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
     	   });
     	 });
        });


        $(document).on('click', '.btn-modal-show', function() {
       $.get('/docentes/'+$($(this).parents("tr")).data('id'), function(data){
           $('#td-ci').text(data.docente.ciDoc);
           $('#td-apellido').text(data.docente.apePaternoDoc+" "+data.docente.apeMaternoDoc);
           $('#td-nombre').text(data.docente.nombreDoc);
           $('#td-email').text(data.docente.emailDoc);
           $('#td-telefono').text(data.docente.telefonoDoc);
           $('#td-proyecto').text(data.docente.proyecto);
           $('#td-cargahoraria').text(data.docente.cargaHoraria);
           $('#td-titulo').text(data.docente.tituloDoc);
       });
       $('#modal-show').modal('show');
       });
    </script>
@endsection
