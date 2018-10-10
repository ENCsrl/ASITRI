@extends('layouts.app')

            

@section('content')
<h1 align="center">FORMULARIO APROBACION TEMA DE PROYECTO FINAL</h1>

<form action="{{url('/')}}" method="POST" id="miForm">
   {{csrf_field()}}
<!--editad fradev-->
<div class="row">
       <label class="col-sm-6 col-form-label">Estudiante: </label>
       <div class="col-md-12">
            <select class="mdb-select colorful-select dropdown-primary" multiple name="area[]" id="area" required>
                <option active disabled>Seleccionar Estudiante</option>
                @foreach(($res[0]) as $estudiante)
                       <option value="{{ $estudiante-> idEstudiante}}"> {{ $estudiante-> nombreEst}}</option>
               @endforeach
            </select>
       </div> 
</div> 
<div class="form-row">
   <!-- Grid column -->
   <div class="col-md-12">
       <!-- Material input -->
       <div class="md-form form-group">
           <input type="number" class="form-control" id="telefono" required name="titulo">
           <label>Telefono</label>
       </div>
   </div>
   <!-- Grid column -->
</div> 
<div class="form-row">
   <!-- Grid column -->
   <div class="col-md-12">
       <!-- Material input -->
       <div class="md-form form-group">
           <input type="email" class="form-control" id="emailEst" required name="email">
           <label>Email</label>
       </div>
   </div>
   <!-- Grid column -->
</div> 

<div class="row">
       <label class="col-sm-6 col-form-label">Tutor: </label>
       <!-- <label class="col-sm-6 col-form-label">Docente : </label> -->
       <div class="col-md-12">
            <select class="mdb-select colorful-select dropdown-primary" multiple name="area[]" id="area" required>
                <option active disabled>Seleccionar tutor</option>
                @foreach(($res[1]) as $tutor)
                       <option value="{{ $tutor-> idDoc}}"> {{ $tutor-> nombreDoc}}</option>
               @endforeach
            </select>
       </div>
</div>

<div class="row">
       <label class="col-sm-6 col-form-label">Carrera: </label>
       <div class="col-md-12">
            <select class="mdb-select colorful-select dropdown-primary" multiple name="area[]" id="area" required>
                <option active disabled>Seleccionar Carrera</option>
                @foreach(($res[5]) as $carrera)
                       <option value="{{ $carrera-> nombreCarrera}}"> {{ $carrera-> nombreCarrera}}</option>
               @endforeach
            </select>
       </div> 
</div>

<div class="row">

       <label class="col-sm-12 col-form-label">Gestion Aprobacion: </label>
       <div class="col-md-2">
            
               
                <input type="date" class="form-control" name="fecha">
                
            
       </div> 
</div> 

 <!-- otra etapa fradev -->
 <div class="row">
       <label class="col-sm-6 col-form-label">Carrera: </label>
       <div class="col-md-12">
            <select class="mdb-select colorful-select dropdown-primary" multiple name="area[]" id="area" required>
                <option active disabled>Seleccionar Carrera</option>
                @foreach(($res[5]) as $carrera)
                       <option value="{{ $carrera-> nombreCarrera}}"> {{ $carrera-> nombreCarrera}}</option>
               @endforeach
            </select>
       </div> 
</div>  
 <!-- Grid row -->
<div class="form-row">
   <!-- Grid column -->
   <div class="col-md-12">
       <!-- Material input -->
       <div class="md-form form-group">
           <input type="text" class="form-control" id="nombreEst" required name="titulo">
           <label>Titulo</label>
       </div>
   </div>
   <!-- Grid column -->
</div> 

<div class="row">
       <label class="col-sm-6 col-form-label">Area: </label>
       <label class="col-sm-6 col-form-label">Subarea : </label>
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
               @foreach(($res[2]) as $area)
                       <option value="{{ $area-> idArea}}"> {{ $area-> nombreArea}}</option>
               @endforeach
           </select>
       </div>
</div>
<div class="row">
<label class="col-sm-2 col-form-label">Modalidad: </label>
       <div class="col-md-12">
           <select class="mdb-select colorful-select dropdown-primary" multiple name="subarea[]" id="subarea" required>
               <option active disabled>Seleccionar la modalidad</option>
               @foreach(($res[3]) as $modalidad)
                       <option value="{{ $modalidad-> idModalidad}}"> {{ $modalidad-> nombreMod}}</option>
               @endforeach
           </select>
       </div>
</div>
<div class="form-row">
   <!-- Grid column -->
   <div class="col-md-12">
       <!-- Material input -->
       <div class="md-form form-group">
           <input type="text" class="form-control" id="nombreEst" required name="titulo">
           <label>Objetivo General</label>
       </div>
   </div>
   <!-- Grid column -->
</div> 
<div class="form-row">
   <!-- Grid column -->
   <div class="col-md-12">
       <!-- Material input -->
       <div class="md-form form-group">
           <input type="text" class="form-control" id="nombreEst" required name="titulo">
           <label>Objetivo Especificos</label>
       </div>
   </div>
   <!-- Grid column -->
</div>

<div class="form-row">
   <!-- Grid column -->
   <div class="col-md-12">
       <!-- Material input -->
       <div class="md-form form-group">
           <input type="text" class="form-control" id="nombreEst" required name="titulo">
           <label>Descripcion</label>
       </div>
   </div>
   <!-- Grid column -->
</div>

<div class="row">
       <label class="col-sm-6 col-form-label">Tutor: </label>
       <label class="col-sm-6 col-form-label">Docente : </label>
       <div class="col-md-6">
            <select class="mdb-select colorful-select dropdown-primary" multiple name="area[]" id="area" required>
                <option active disabled>Seleccionar tutor</option>
                @foreach(($res[1]) as $tutor)
                       <option value="{{ $tutor-> idDoc}}"> {{ $tutor-> nombreDoc}}</option>
               @endforeach
            </select>
       </div>
       <div class="col-md-6">
           <select class="mdb-select colorful-select dropdown-primary" multiple name="subarea[]" id="subarea" required>
               <option active disabled>Docente de la materia</option>
               @foreach(($res[1]) as $tutor)
                       <option value="{{ $tutor-> idDoc}}"> {{ $tutor-> nombreDoc}}</option>
               @endforeach
           </select>
        </div>   
</div>

<!-- <div class="row">
       <label class="col-sm-6 col-form-label">Estudiante: </label>
       <div class="col-md-12">
            <select class="mdb-select colorful-select dropdown-primary" multiple name="area[]" id="area" required>
                <option active disabled>Seleccionar Estudiante</option>
                @foreach(($res[0]) as $estudiante)
                       <option value="{{ $estudiante-> idEstudiante}}"> {{ $estudiante-> nombreEst}}</option>
               @endforeach
            </select>
       </div> 
</div>              -->

 <!-- hasta aqui -->

</form>
<!-- <button class="btn btn-success">¿Soy un botón o un enlace?</button> -->
<!-- <a href="/perfiles" class="btn btn-success">Siguiente</a> -->
<input type="button" class="btn btn-success" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();">

@endsection