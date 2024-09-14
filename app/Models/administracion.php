<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administracion extends Model
{
    //Especifica la tabla que Laravel debe usar
    protected $table = 'administracion';

    // Especifica los campos que se pueden rellenar
    protected $fillable = ['adm_nombre', 'adm_apellido', 'adm_cargo','adm_telefono','adm_email','adm_rol_id'];
}
