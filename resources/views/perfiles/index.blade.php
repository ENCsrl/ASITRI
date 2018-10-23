@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-11 col-md-offset-2">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->
                <h1 align="center">REGISTRO DE PERFIL</h1>
                <div class="panel-body">
                   <form action="" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                    
                        <label for="idCarrera">Carrera</label>
                        <!-- <select id="disabledSelect" class="form-control">
                            <option>Seleccionar carrera</option>
                        </select> -->
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        <!-- <input type="text" name="idCarrera" class="form-control" value="{{old('idCarrera')}}"> -->
                       
                    </div>
                    <div class="form-group">
                        <label for="title">Titulo del Perfil</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="objetivoGen">Objetivo General</label>
                        <input type="text" name="title" class="form-control" value="{{old('objetivoGen')}}">
                    </div>
                    <div class="form-group">
                        <label for="objetivoEsp">Objetivos Especificos</label>
                        <input type="text" name="title" class="form-control" value="{{old('objetivoEsp')}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <textarea name="description" class="form-control">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="modal">Modalidad</label>
                        <input type="text" name="modal" class="form-control" value="{{old('modal')}}">
                    </div>
                    <div class="form-group">
                        <label for="area">Area</label>
                        <input type="text" name="area" class="form-control" value="{{old('area')}}">
                    </div>
                    <div class="form-group">
                        <label for="subarea">Subarea</label>
                        <input type="text" name="subarea" class="form-control" value="{{old('subarea')}}">
                    </div>
                    <div class="form-group">
                        <label for="tutor">Tutor</label>
                        <input type="text" name="tutor" class="form-control" value="{{old('area')}}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Registrar</button>
                    </div>
                   </form>

                    <div class="tablaScroll5">
                    <table class="table table-striped table-sm tablaScroll5">
                        <thead>
                            <tr>
                                <th style="width: 8%" class="text-center">Carrera</th>
                                <th style="width: 20%" >Titulo de Perfil</th>
                                <th style="width: 15%" >Nombre</th>
                                <th style="width: 10%" >Telefono</th>
                                <th style="width: 18%" >Carrera</th>
                                <th style="width: 7%" >Proyecto</th>
                                <th style="width: 22%" class="text-center">Herramientas</th>
                            </tr>
                        </thead>
                    </table>          
                </div>
            </div>
        </div>
    </div>


@endsection