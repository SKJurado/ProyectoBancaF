<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RutaController,
    ConductorController,
    UnidadController,
    PasajeController,
    DashboardController
};

//DASHBOARD
Route::get('/', [DashboardController::class, 'index']);

//PASAJES
Route::post('/pasajes', [PasajeController::class, 'store']);
Route::get('/pasajes/{id}/edit', [PasajeController::class, 'edit']);
Route::post('/pasajes/{id}/update', [PasajeController::class, 'update']);
Route::post('/pasajes/{id}/delete', [PasajeController::class, 'destroy']);
