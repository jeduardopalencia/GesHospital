<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administracionController;
use App\Http\Controllers\alergia_has_pacienteController;
use App\Http\Controllers\alergiaController;
use App\Http\Controllers\rolesControllerr;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\pacienteController;
use App\Http\Controllers\recetaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ADMINISTRACION
Route::post('/administracion', [administracionController::class, 'store']); // Insertar datos
Route::get('/administracion', [administracionController::class, 'index']); // Mostrar todos los datos
Route::get('/administracion/{id}', [administracionController::class, 'show']);  // Mostrar uno específico
Route::put('/administracion/{id}', [administracionController::class, 'update']);  // Actualizar un registro

// ALERGIAS
Route::post('/alergia', [alergiaController::class, 'store']);
Route::get('/alergia', [alergiaController::class, 'index']); // Mostrar todos los datos
Route::get('/alergia/{id}', [alergiaController::class, 'show']);  // Mostrar uno específico
Route::put('/alergia/{id}', [alergiaController::class, 'update']);  // Actualizar un registro

// Union Alergia y paciente
Route::post('/alergia_has_paciente', [alergia_has_pacienteController::class, 'store']);

// ROLES
Route::post('/roles', [rolesControllerr::class, 'store']); // Insertar datos
Route::get('/roles', [rolesControllerr::class, 'index']); // Mostrar todos los datos
Route::get('/roles/{id}', [rolesControllerr::class, 'show']);  // Mostrar uno específico
Route::put('/roles/{id}', [rolesControllerr::class, 'update']);  // Actualizar un registro

// USUARIOS
Route::post('/usuarios', [usuariosController::class, 'store']); // Insertar datos
Route::get('/usuarios', [usuariosController::class, 'index']); // Mostrar todos los datos
Route::get('/usuarios/{id}', [usuariosController::class, 'show']);  // Mostrar uno específico
Route::put('/usuarios/{id}', [usuariosController::class, 'update']);  // Actualizar un registro

//PACIENTE
Route::post('/paciente', [pacienteController::class, 'store']); // Insertar datos
Route::get('/paciente', [pacienteController::class, 'index']); // Mostrar todos los datos
Route::get('/paciente/{id}', [pacienteController::class, 'show']);  // Mostrar uno específico
Route::put('/paciente/{id}', [pacienteController::class, 'update']);  // Actualizar un registro

//RECETA
Route::post('/receta', [recetaController::class, 'store']); // Insertar datos
Route::get('/receta', [recetaController::class, 'index']); // Mostrar todos los datos
Route::get('/receta/{id}', [recetaController::class, 'show']);  // Mostrar uno específico
Route::put('/receta/{id}', [recetaController::class, 'update']);  // Actualizar un registro

//ESPECIALIDAD
Route::post('/especialidad', [especialidadController::class, 'store']); // Insertar datos
Route::get('/especialidad', [recetaController::class, 'index']); // Mostrar todos los datos
Route::get('/especialidad/{id}', [recetaController::class, 'show']);  // Mostrar uno específico
Route::put('/especialidad/{id}', [recetaController::class, 'update']);  // Actualizar un registro
