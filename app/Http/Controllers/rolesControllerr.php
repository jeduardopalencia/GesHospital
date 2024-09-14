<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roles;

class rolesControllerr extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos si es necesario
        $request->validate([
            'rol_nombre' => 'required',
            // Otros campos y reglas
        ]);

        // Crear el nuevo registro en la base de datos
        roles::create([
            'rol_nombre' => $request->rol_nombre,
            'rol_descripcion' => $request->rol_descripcion,
        ]);
        return response()->json(['mensaje' => 'Datos insertados correctamente.'], 201);
    }

     //Metodo para actualizar datos
    public function update(Request $request, $id)
    {
        // Validar los datos si es necesario
        $request->validate([
            'rol_nombre' => 'required',
            // Otros campos y reglas
        ]);
 
        // Buscar el registro que se quiere actualizar
        $roles = roles::findOrFail($id);
 
        // Actualizar el registro con los nuevos datos
        $roles->update([
            'rol_nombre' => $request->rol_nombre,
            'rol_descripcion' => $request->rol_descripcion,
        ]);
 
        // Retornar una respuesta exitosa
        return response()->json(['mensaje' => 'Datos actualizados correctamente.'], 200);
    }

    //Metodo para mostrar todos los datos
    public function index()
    {
        // Obtener todos los registros de la tabla roles
        $roles = roles::all();

        // Retornar los datos como JSON
        return response()->json($roles, 200);
    }
    // Para buscar un dato en especifico
    public function show($id)
    {
        // Obtener un registro específico por su ID
        $roles = roles::findOrFail($id);

        // Retornar los datos como JSON
        return response()->json($roles, 200);
    }
}
