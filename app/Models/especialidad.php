<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especialidad extends Model
{
    //Especifica la tabla que Laravel debe usar
    protected $table = 'especialidad';

    // Especifica los campos que se pueden rellenar
    protected $fillable = ['esp_nombre'];
}
