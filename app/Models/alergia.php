<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alergia extends Model
{
     //Especifica la tabla que Laravel debe usar
     protected $table = 'alergia';

     // Especifica los campos que se pueden rellenar
     protected $fillable = ['ale_nombre'];
}
