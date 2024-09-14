<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alergia;


class alergiaController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos si es necesario
        $request->validate([
            'ale_nombre' => 'required',
            // Otros campos y reglas
        ]);

        // Crear el nuevo registro en la base de datos
        alergia::create([
            'ale_id' => $request->ale_id,
            'ale_nombre' => $request->ale_nombre,
        ]);
        return response()->json(['mensaje' => 'Datos insertados correctamente.'], 201);
    }
     
    //Metodo para actualizar datos
    public function update(Request $request, $id)
    {
        // Validar los datos si es necesario
        $request->validate([
           'ale_id' => 'required|integer',
           'ale_nombre' => 'required',
            // Otros campos y reglas
        ]);
 
        // Buscar el registro que se quiere actualizar
        $alergia = alergia::findOrFail($id);
 
        // Actualizar el registro con los nuevos datos
        $alergia->update([
            'ale_nombre' => $request->ale_nombre,
        ]);
 
        // Retornar una respuesta exitosa
        return response()->json(['mensaje' => 'Datos actualizados correctamente.'], 200);
    }
    
    //Metodo para mostrar todos los datos
    public function index()
    {
        // Obtener todos los registros de la tabla alergia
        $alergia = alergia::all();
 
        // Retornar los datos como JSON
        return response()->json($alergia, 200);
    }
    // Para buscar un dato en especifico
    public function show($id)
    {
        // Obtener un registro específico por su ID
        $alergia = alergia::findOrFail($id);
 
        // Retornar los datos como JSON
        return response()->json($alergia, 200);
    }
}
