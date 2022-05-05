<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

   return redirect()->route('usuario.index');
});

Route::get('/usuario',[usuarioController::class,'index'])->name('usuario.index');
Route::get('/usuario/create',[usuarioController::class,'create'])->name('usuario.create');
Route::post('/usuario/create',[usuarioController::class,'store'])->name('usuario.store');
Route::get('/usuario/edit/{id}',[usuarioController::class,'edit'])->name('usuario.edit');
Route::put('/usuario/edit',[usuarioController::class,'update'])->name('usuario.update');
Route::get('/usuario/delete/{id}',[usuarioController::class,'delete'])->name('usuario.delete');
Route::delete('/usuario/delete',[usuarioController::class,'destroy'])->name('usuario.destroy');