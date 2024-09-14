<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receta extends Model
{
    //Especifica la tabla que Laravel debe usar
    protected $table = 'receta';

    // Especifica los campos que se pueden rellenar
    protected $fillable = ['rec_cantidad','rec_subtotal','rec_estado', 'rec_pac_id','rec_med_id','rec_descripcion','rec_inv_id'];
}
