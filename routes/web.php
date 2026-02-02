<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EmpleadoController,
    ClienteController,
    MovimientoController,
    CuentaController,
    SucursalController,
    TipoMovimientoController,
    MonedaController,
    DashboardController
};

//DASHBOARD
Route::get('/', [DashboardController::class,'index'])->name('dashboard');

Route::resource('empleados', EmpleadoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('cuentas', CuentaController::class)->except(['edit','update','destroy']);
Route::resource('movimientos', MovimientoController::class)->only(['index','create','store']);

Route::get('sucursales', [SucursalController::class,'index'])->name('sucursales.index');
Route::get('monedas', [MonedaController::class,'index'])->name('monedas.index');
Route::get('tipos-movimiento', [TipoMovimientoController::class,'index'])->name('tipos.index');
