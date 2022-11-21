<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aprobacion_procesoController;
use App\Http\Controllers\BarrioController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\Historia_notaController;
use App\Http\Controllers\Informacion_gradoController;
use App\Http\Controllers\Modalidad_gradoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\Nivel_estudioController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\Programa_academicoController;
use App\Http\Controllers\Tipo_documentoController;



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/solicitud', function () {
    return view('solicitud_estudiante.solicitud');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});
