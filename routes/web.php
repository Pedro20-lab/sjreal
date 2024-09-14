<?php

use App\Http\Controllers\DetalleReservaController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('habitaciones', HabitacionController::class);
Route::resource('personas', PersonaController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('detalle_reservas', DetalleReservaController::class);

