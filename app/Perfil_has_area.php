<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil_has_area extends Model
{
    //
    protected $table='proyecto_has_Area';
    protected $fillable =['idProyecto','idArea'];

    public function proyecto()
    {
        return 
    }
}
