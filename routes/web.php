<?php

use App\Http\Controllers\HabitacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('habitaciones', HabitacionController::class);
