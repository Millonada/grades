<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[AsignaturaController::class,'index'])->name('materia.index');
Route::get('/create',[AsignaturaController::class,'create'])->name('materia.create');
Route::get('/edit/{id}',[AsignaturaController::class,'edit'])->name('materia.edit');
Route::get('/edit/update/{id}',[AsignaturaController::class,'update'])->name('materia.update');
Route::post('/store',[AsignaturaController::class,'store'])->name('materia.store');
Route::get('/delete/{id}',[AsignaturaController::class,'destroy'])->name('materia.delete');
Route::get('/show/{id}',[AsignaturaController::class,'show'])->name('materia.show');