<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class usuariosController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos si es necesario
        $request->validate([
            'usu_rol_id' => 'required|integer',
            'usu_fecha_creacion' => 'required|date',
            'usu_estado' => 'required',
            'usu_pass' => 'required',
            // Otros campos y reglas
        ]);

        // Crear el nuevo registro en la base de datos
        usuarios::create([
            'usu_rol_id' => $request->usu_rol_id,
            'usu_fecha_creacion' => $request->usu_fecha_creacion,
            'usu_estado' => $request->usu_estado,
            'usu_pass' => $request->usu_pass,
        ]);
        return response()->json(['mensaje' => 'Datos insertados correctamente.'], 201);
    }
    
    //Metodo para actualizar datos
    public function update(Request $request, $id)
    {
        // Validar los datos si es necesario
        $request->validate([
            'usu_id' => 'required|integer',
            'usu_rol_id' => 'required|integer',
            'usu_fecha_modificacion' => 'required|date',
            'usu_estado' => 'required',
            'usu_pass' => 'required',
            // Otros campos y reglas
        ]);

        // Buscar el registro que se quiere actualizar
        $usuarios = usuarios::findOrFail($id);

        // Actualizar el registro con los nuevos datos
        $usuarios->update([
            'usu_rol_id' => $request->usu_rol_id,
            'usu_fecha_modificacion' => $request->usu_fecha_modificacion,
            'usu_estado' => $request->usu_estado,
            'usu_pass' => $request->usu_pass,
        ]);

        // Retornar una respuesta exitosa
        return response()->json(['mensaje' => 'Datos actualizados correctamente.'], 200);
    }
    
    //Metodo para mostrar todos los datos
    public function index()
    {
        // Obtener todos los registros de la tabla usuarios
        $usuarios = usuarios::all();

        // Retornar los datos como JSON
        return response()->json($usuarios, 200);
    }
    // Para buscar un dato en especifico
    public function show($id)
    {
        // Obtener un registro específico por su ID
        $usuarios = usuarios::findOrFail($id);

        // Retornar los datos como JSON
        return response()->json($usuarios, 200);
    }
}
