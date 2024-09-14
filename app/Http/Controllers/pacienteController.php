<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;

class pacienteController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos si es necesario
        $request->validate([
            'pac_nombre' => 'required',
            'pac_apellido' => 'required',
            'pac_fecha_nacimiento' => 'required',
            'pac_sexo' => 'required',
            'pac_direccion' => 'required',
            'pac_telefono' => 'required',
            'pac_estado' => 'required',
            'pac_rol_id'  => 'required',
            // Otros campos y reglas
        ]);

        // Crear el nuevo registro en la base de datos
        paciente::create([
            'pac_nombre' => $request->pac_nombre,
            'pac_apellido' => $request->pac_apellido,
            'pac_fecha_nacimiento' => $request->pac_fecha_nacimiento,
            'pac_sexo' => $request->pac_sexo,
            'pac_direccion' => $request->pac_direccion,
            'pac_telefono' => $request->pac_telefono,
            'pac_email' => $request->pac_email,
            'pac_estado' => $request->pac_estado,
            'pac_rol_id' => $request->pac_rol_id,
        ]);
        return response()->json(['mensaje' => 'Datos insertados correctamente.'], 201);
    }
    //Metodo para actualizar datos
    public function update(Request $request, $id)
    {
        // Validar los datos si es necesario
        $request->validate([
            'pac_id' => 'pac_id|integer',
            'pac_nombre' => 'required',
            'pac_apellido' => 'required',
            'pac_fecha_nacimiento' => 'required',
            'pac_sexo' => 'required',
            'pac_direccion' => 'required',
            'pac_telefono' => 'required',
            'pac_estado' => 'required',
            'pac_rol_id'  => 'required',
            // Otros campos y reglas
        ]);
  
        // Buscar el registro que se quiere actualizar
        $paciente = paciente::findOrFail($id);
  
        // Actualizar el registro con los nuevos datos
        $paciente->update([
            'pac_nombre' => $request->pac_nombre,
            'pac_apellido' => $request->pac_apellido,
            'pac_fecha_nacimiento' => $request->pac_fecha_nacimiento,
            'pac_sexo' => $request->pac_sexo,
            'pac_direccion' => $request->pac_direccion,
            'pac_telefono' => $request->pac_telefono,
            'pac_email' => $request->pac_email,
            'pac_estado' => $request->pac_estado,
            'pac_rol_id' => $request->pac_rol_id,
        ]);
  
        // Retornar una respuesta exitosa
        return response()->json(['mensaje' => 'Datos actualizados correctamente.'], 200);
    }
 
    //Metodo para mostrar todos los datos
    public function index()
    {
        // Obtener todos los registros de la tabla paciente
        $paciente = paciente::all();
 
        // Retornar los datos como JSON
        return response()->json($paciente, 200);
    }
    // Para buscar un dato en especifico
    public function show($id)
    {
        // Obtener un registro específico por su ID
        $paciente = paciente::findOrFail($id);
 
        // Retornar los datos como JSON
        return response()->json($paciente, 200);
    }
}
