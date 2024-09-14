<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\especialidad;

class especialidadController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos si es necesario
        $request->validate([
            'esp_nombre' => 'required',
            // Otros campos y reglas
        ]);

        // Crear el nuevo registro en la base de datos
        especialidad::create([
            'esp_nombre' => $request->esp_nombre,
        ]);
        return response()->json(['mensaje' => 'Datos insertados correctamente.'], 201);
    }
    
    //Metodo para actualizar datos
    public function update(Request $request, $id)
    {
        // Validar los datos si es necesario
        $request->validate([
            'esp_id' => 'required|integer',
            'esp_nombre' => 'required',
            // Otros campos y reglas
        ]);

        // Buscar el registro que se quiere actualizar
        $especialidad = especialidad::findOrFail($id);

        // Actualizar el registro con los nuevos datos
        $especialidad->update([
           'esp_nombre' => $request->esp_nombre,
        ]);

        // Retornar una respuesta exitosa
        return response()->json(['mensaje' => 'Datos actualizados correctamente.'], 200);
    }
    
    //Metodo para mostrar todos los datos
    public function index()
    {
        // Obtener todos los registros de la tabla especialidad
        $especialidad = especialidad::all();

        // Retornar los datos como JSON
        return response()->json($especialidad, 200);
    }
    // Para buscar un dato en especifico
    public function show($id)
    {
        // Obtener un registro específico por su ID
        $especialidad = especialidad::findOrFail($id);

        // Retornar los datos como JSON
        return response()->json($especialidad, 200);
    }

}
