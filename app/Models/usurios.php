<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usurios extends Model
{
    //Especifica la tabla que Laravel debe usar
    protected $table = 'usuarios';

    // Especifica los campos que se pueden rellenar
    protected $fillable = ['usu_rol_id','usu_fecha_creacion','usu_estado','usu_pass'];
}
