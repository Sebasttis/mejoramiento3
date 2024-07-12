<?php

use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PartidoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('jugador/store', [JugadorController::class,'store'])->name('jugador.store');
Route::get('jugador/create',[JugadorController::class,'create']);
Route::get('jugador/listar',[JugadorController::class,'index'])->name('jugador.index');
Route::get('jugador/{jugador}',[JugadorController::class,'show'])->name('jugador.show');
Route::delete('jugador/{jugador}',[JugadorController::class,'destroy'])->name('jugador.destroy');
Route::put('jugador/{jugador}',[JugadorController::class,'update'])->name('jugador.update');
Route::get('jugador/{jugador}/editar',[JugadorController::class,'edit'])->name('jugador.edit');

Route::post('partido/store', [PartidoController::class,'store'])->name('partido.store');
Route::get('partido/create',[PartidoController::class,'create']);
Route::get('partido/listar',[PartidoController::class,'index'])->name('partido.index');
Route::get('partido/{partido}',[PartidoController::class,'show'])->name('partido.show');
Route::delete('partido/{partido}',[PartidoController::class,'destroy'])->name('partido.destroy');
Route::put('partido/{partido}',[PartidoController::class,'update'])->name('partido.update');
Route::get('partido/{partido}/editar',[PartidoController::class,'edit'])->name('partido.edit');