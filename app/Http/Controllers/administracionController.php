<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administracion;

class administracionController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos si es necesario
        $request->validate([
            'adm_nombre' => 'required',
            'adm_apellido' => 'required',
            'adm_cargo' => 'required',
            'adm_telefono' => 'required',
            'adm_email' => 'required',
            'adm_rol_id' => 'required|integer',
            // Otros campos y reglas
        ]);

        // Crear el nuevo registro en la base de datos
        administracion::create([
            'adm_nombre' => $request->adm_nombre,
            'adm_apellido' => $request->adm_apellido,
            'adm_cargo' => $request->adm_cargo,
            'adm_telefono'=> $request->adm_telefono,
            'adm_email'=> $request->adm_email,
            'adm_rol_id'=> $request->adm_rol_id
        ]);
        return response()->json(['mensaje' => 'Datos insertados correctamente.'], 201);
    }
    //Metodo para actualizar datos
    public function update(Request $request, $id)
    {
        // Validar los datos si es necesario
        $request->validate([
            'adm_id' => 'required|integer',
            'adm_nombre' => 'required',
            'adm_apellido' => 'required',
            'adm_cargo' => 'required',
            'adm_telefono' => 'required',
            'adm_email' => 'required',
            'adm_rol_id' => 'required|integer',
            // Otros campos y reglas
        ]);

        // Buscar el registro que se quiere actualizar
        $administracion = administracion::findOrFail($id);

        // Actualizar el registro con los nuevos datos
        $administracion->update([
            'adm_nombre' => $request->adm_nombre,
            'adm_apellido' => $request->adm_apellido,
            'adm_cargo' => $request->adm_cargo,
            'adm_telefono' => $request->adm_telefono,
            'adm_email' => $request->adm_email,
            'adm_rol_id' => $request->adm_rol_id
        ]);

        // Retornar una respuesta exitosa
        return response()->json(['mensaje' => 'Datos actualizados correctamente.'], 200);
    }

    //Metodo para mostrar todos los datos
    public function index()
    {
        // Obtener todos los registros de la tabla administracion
        $administracion = administracion::all();

        // Retornar los datos como JSON
        return response()->json($administracion, 200);
    }
    // Para buscar un dato en especifico
    public function show($id)
    {
        // Obtener un registro específico por su ID
        $administracion = administracion::findOrFail($id);

        // Retornar los datos como JSON
        return response()->json($administracion, 200);
    }
}
