<?php

use App\Http\Controllers\compañiaController;
use App\Http\Controllers\cuartelController;
use App\Http\Controllers\cuerpoController;
use App\Http\Controllers\servicioController;
use App\Http\Controllers\soldadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/soldado', [soldadoController::class,'mostrar'])->name('mostrarsoldado');
Route::post('/soldado-store', [soldadoController::class,'store'])->name('store.soldado');

Route::get('/cuartel', [cuartelController::class,'mostrar'])->name('mostrarcuartel');
Route::post('/cuartel-store', [cuartelController::class,'store'])->name('store.cuartel');

Route::get('/cuerpo', [cuerpoController::class,'mostrar'])->name('mostrarcuerpo');
Route::post('/cuerpo-store', [cuerpoController::class,'store'])->name('store.cuerpo');

Route::get('/compañia', [compañiaController::class,'mostrar'])->name('mostrarcompañia');
Route::post('/compañia-store', [compañiaController::class,'store'])->name('store.compañia');

Route::get('/servicio', [ServicioController::class,'mostrar'])->name('mostrarservicio');
Route::post('/servicio-store', [servicioController::class,'store'])->name('store.servicio');

