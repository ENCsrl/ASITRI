@extends('layouts.app')

            

@section('content')


   <h1 align="center">Registro</h1> 
    <br>
<div class="container">
    <!-- <div class="col"> -->
    

        
    <form method="POST">
    {{csrf_field()}}
    
            <div class="form-group row">
                <label for="nombreCarrera" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombreCarrera" placeholder="Escriba la carrera">
                </div>
            </div>

            <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
            </div>
    </form>



</div>
<br>
<br>
<div>
    <br>
</div>
<div>
    <br>
</div>


@endsection