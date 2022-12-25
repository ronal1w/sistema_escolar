<?php

use Illuminate\Support\Facades\Route;

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
    return view('Auth.login');
});

Auth::routes();

Route::get('notas-estudiantes-materias/pdf', [App\Http\Controllers\NotasEstudiantesMateriaController::class, 'pdf'])->name('notas-estudiantes-materias.pdf');

Route::resource('estudiantes', App\Http\Controllers\EstudianteController::class)->middleware('auth');
Route::resource('materias', App\Http\Controllers\MateriaController::class)->middleware('auth');
Route::resource('notas-estudiantes-materias', App\Http\Controllers\NotasEstudiantesMateriaController::class)->middleware('auth');



//Route::resource('/estudiante',App\Http\Controllers\EstudianteController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

