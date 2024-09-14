<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\receta;

class recetaController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos si es necesario
        $request->validate([
            'rec_cantidad' => 'required|decimal',
            'rec_subtotal' => 'required|decimal',
            'rec_estado' => 'required',
            'rec_med_id' => 'required|integer',
            'rec_pac_id' => 'required|integer',
            'rec_descripcion' => 'required',
            'rec_inv_id' => 'required|integer',
            // Otros campos y reglas
        ]);

        // Crear el nuevo registro en la base de datos
        receta::create([
            'rec_cantidad' => $request->rec_cantidad,
            'rec_subtotal' => $request->rec_subtotal,
            'rec_estado' => $request->rec_estado,
            'rec_pac_id' => $request->rec_pac_id,
            'rec_med_id' => $request->rec_med_id,
            'rec_descripcion' => $request->rec_descripcion,
            'rec_inv_id' => $request->rec_inv_id,
        ]);
        return response()->json(['mensaje' => 'Datos insertados correctamente.'], 201);
    }
    //Metodo para actualizar datos
    public function update(Request $request, $id)
    {
        // Validar los datos si es necesario
        $request->validate([
            'rec_id' => 'required|integer',
            'rec_cantidad' => 'required|decimal',
            'rec_subtotal' => 'required|decimal',
            'rec_estado' => 'required',
            'rec_med_id' => 'required|integer',
            'rec_pac_id' => 'required|integer',
            'rec_descripcion' => 'required',
            'rec_inv_id' => 'required|integer',
            // Otros campos y reglas
        ]);
  
        // Buscar el registro que se quiere actualizar
        $receta = receta::findOrFail($id);
  
        // Actualizar el registro con los nuevos datos
        $receta->update([
           'rec_cantidad' => $request->rec_cantidad,
            'rec_subtotal' => $request->rec_subtotal,
            'rec_estado' => $request->rec_estado,
            'rec_pac_id' => $request->rec_pac_id,
            'rec_med_id' => $request->rec_med_id,
            'rec_descripcion' => $request->rec_descripcion,
            'rec_inv_id' => $request->rec_inv_id,
        ]);
  
        // Retornar una respuesta exitosa
        return response()->json(['mensaje' => 'Datos actualizados correctamente.'], 200);
    }
 
    //Metodo para mostrar todos los datos
    public function index()
    {
        // Obtener todos los registros de la tabla receta
        $receta = receta::all();
 
        // Retornar los datos como JSON
        return response()->json($receta, 200);
    }
    // Para buscar un dato en especifico
    public function show($id)
    {
        // Obtener un registro específico por su ID
        $receta = preceta::findOrFail($id);
 
        // Retornar los datos como JSON
        return response()->json($receta, 200);
    }
}
