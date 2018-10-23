@extends('layouts.app')

            

@section('content')
  
   <h1 align="center">Registrar Carrera</h1>
    @if(session()->has('msj'))
        <div class="alert alert-success" role="alert">{{session('msj')}}</div> 
    @endif
    @if(session()->has('nmsj'))
        <div class="alert alert-danger" role="alert">Error al guardar</div>
    @endif
    <form  method="POST" id="miForm">
       {{csrf_field()}}
        <!-- Grid row -->
        <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-12">
                <!-- Material input -->
                <div class="md-form form-group">
                    <input type="text" class="form-control" id="nombreCarrera"  name="nombreCarrera">
                    <label>Nombre de la Carrera</label>
                </div>
            </div>
            <!-- Grid column -->
        </div>  
  
  
        <div class="group form-row" style=margin-top:60px;></div>
            <div class="form-row">
            <div class="col-md-8" ></div>
        
            <!-- <button type="submit" class="btn btn-red btn-rounded">
                <font color="white" size="3"> CANCELAR</font>
			</button> -->
            <a class="btn btn-red btn-rounded " id="cancel" name="cancel" href="/carreras">CANCELAR</a>

            <button class="btn btn-light-green btn-rounded" type="submit">
                <font color="white" size="3">GUARDAR</font>
			</button>
        </div>
</form>
<div>
<br>
<br>
</div>
@endsection
