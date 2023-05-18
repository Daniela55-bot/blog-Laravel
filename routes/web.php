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
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('inicio.create');
});

Route::get('/sesion', function () {
    return view('sesion.create');
});

Route::get('/blog', function () {
    return view('blog.create');
});
/*Route::get('/noticia1', function () {
    return view('noticia1.create');
});*/

/*Route::get('/registro', function () {
    return view('registro.create');
});*/

Route::get('/contactenos', function () {
    return view('contactenos.create');
});

Route::get('/contrasena', function () {
    return view('contrasena.create');
});

/*Route::get('/publicar', function () {
    return view('publicar.create');
});*/

Route::resource('registro', 'RegistroController');
Route::resource('noticia1', 'ComentariosController');
Route::resource('publicar', 'PublicarController');