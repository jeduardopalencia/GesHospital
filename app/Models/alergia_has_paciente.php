<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alergia_has_paciente extends Model
{
      //Especifica la tabla que Laravel debe usar
      protected $table = 'alergia_has_paciente';

      // Especifica los campos que se pueden rellenar
      protected $fillable = ['alergia_ale_id', 'paciente_pac_id'];
}
