<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
     //Especifica la tabla que Laravel debe usar
     protected $table = 'roles';

     // Especifica los campos que se pueden rellenar
     protected $fillable = ['rol_nombre','rol_descripcion'];
}
