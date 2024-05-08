<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso/listar',[CursoController::class,'index'])->name('curso.listar');
Route::get('/curso/create',[CursoController::class,'create']);
Route::post('/curso/store',[CursoController::class,'store'])->name('curso.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');