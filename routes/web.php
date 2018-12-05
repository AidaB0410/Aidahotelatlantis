<?php

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

Route::get('/habitaciones', function () {
    return view('habitaciones');
});

Route::get('/home', function () {
    return view('home');
});

Route::resource('cuartos', 'CuartosController');
Route::resource('clientes', 'ClienteController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
