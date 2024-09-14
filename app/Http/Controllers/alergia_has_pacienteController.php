<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alergia_has_paciente;

class alergia_has_pacienteController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos si es necesario
        $request->validate([
            'alergia_ale_id' => 'required|integer',
            'paciente_pac_id' => 'required|integer',
            // Otros campos y reglas
        ]);

        // Crear el nuevo registro en la base de datos
        alergia_has_paciente::create([
            'alergia_ale_id' => $request->alergia_ale_id,
            'paciente_pac_id' => $request->paciente_pac_id,
        ]);
        return response()->json(['mensaje' => 'Datos insertados correctamente.'], 201);
    }
}
