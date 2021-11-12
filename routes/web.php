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
    return view('inicial')->name('inicial');
});

Route::get('/noticias', function () {
    return view('noticias')->name('noticias');

});

Route::get('/criar_noticias', function () {
    return view('criar_noticias')->name('Criarnoticias');
});

Route::get('/editar_noticias', function () {
    return view('editar_noticias')->name('EditarNoticias');
});
