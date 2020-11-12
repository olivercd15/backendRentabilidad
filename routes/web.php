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
    return view('login');
});

Route::get('preguntas', function () {
    return view('preguntas');
});

Route::get('aplicacion', function () {
    return view('aplicacion');
});

Route::get('mapas',function (){
    return view('mapas');
});

Route::get('catalogo', function () {
    return view('/empresa/catalogo');
});
Route::get('detalleempresa', function () {
    return view('/empresa/detalle_empresa');
});

Route::get('fotos', function () {
    return view('fotos');
});

Route::get('registrar', function () {
    return view('/usuario/registrar_usuario');
});

Route::get('index', function () {
    return view('/template2/app');
});

Route::get('indexusuario', function () {
    return view('/usuario/index');
});

Route::get('editarusuario', function () {
    return view('/usuario/editar_usuario');
});

Route::get('registroempresa', function () {
    return view('/empresa/registrar_empresa');
});

Route::get('indexempresa', function () {
    return view('/empresa/catalogo');
});

Route::get('empresapopia', function () {
    return view('/empresa/empresa_propia');
});
