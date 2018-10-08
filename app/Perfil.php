<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table='Perfil';
    protected $prmaryKey='idProyecto';
    protected $fillable=['titulo','objetivos','descripcion','fechaIni','fechaFin','periodo','sesionDeConsejo','idModalidad','fechaRegistroProy'];

    public function proyecto_estudiante(){
        
    }
}
