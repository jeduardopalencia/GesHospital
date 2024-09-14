<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    //Especifica la tabla que Laravel debe usar
    protected $table = 'paciente';

    // Especifica los campos que se pueden rellenar
    protected $fillable = ['pac_nombre','pac_apellido','pac_fecha_nacimiento','pac_sexo','pac_direccion','pac_telefono','pac_email','pac_estado','pac_rol_id'];
}
