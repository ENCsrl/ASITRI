@extends('layouts.app')

            

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <h1 align="center">Carreras</h1>

 <div class="container">
<div class="row">
  
   <div class="col-md-6">
        <!-- <label class="sr-only" for="search1">Carrera</label>
        <div class="md-form input-group mb-3">
           <input type="text" class="form-control pl-0 rounded-0" id="search1" placeholder="Buscar carrera...">
        </div>  -->
   </div>
   <div class="col-md-3">
      
   </div>
   <div class="col-md-3">
      
        <button class="btn btn-cyan btn-rounded">
                <a href="/crear"><font color="white" size="3">NUEVO CARRERA</font></a>
	    </button>
   </div>
   
        {!!form::open(['route'=>'carreras.createcarrera','method'=>'GET','class'=>'navbar-form navbar-left'])!!}
            <div class="form-group">
                {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre de Carrera'])!!}
            </div>
        {!!Form::close()!!}
   
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
              	<th style="width: 20%" >Codigo</th>
              	<th style="width: 70%" >Nombre Carrera</th>
                <th style="width: 10%;" class="text-center">Detalles</th>
            </tr>
        </thead>
        <tbody class="tabla2">
            @foreach($carreras as $carrera)
            <tr data-id="{{$carrera->idCarrera}}">
            <td style="width: 20%" >{{$carrera-> idCarrera}}</td>
                <td style="width: 70%" >{{$carrera->nombreCarrera}}</td>
                <td style="width: 10%;" class="text-center">
                    <a class="btn-floating btn-sm btn-mdb-color btn-modal-show" data-toggle="tooltip" data-placement="top" title="ver"><i class="fa fa-eye mt-2 ml-1 fa-lg"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>
</div>
   

    

@endsection
@section('script')
<script>
    $(document).ready(function(){
 	 $("#Search1").on("keyup", function() {
 	   var value = $(this).val().toLowerCase();
 	   $("#table1 tr").filter(function() {
 	     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
 	   });
 	 });
    });

  </script>
@endsection
