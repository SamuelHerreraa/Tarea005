<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar la vista index
Route::get('/', 'ProductController@index');

// Ruta para mostrar la vista de creación
Route::get('/create', 'ProductController@create');

// Ruta para mostrar la vista de edición (no se mostrará la vista directamente)
Route::get('/edit/{id}', 'ProductController@edit');