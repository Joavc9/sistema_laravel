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
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/salir', 'Auth\LoginController@logout')->name('logout');
// Routes clients
Route::get('/clientes', 'ClientController@index')->name('clients');
Route::get('/clientes/ver/{id}', 'ClientController@show')->name('client.show');

Route::middleware(['auth'])->group(function () {
    // Routes clients
    Route::get('/clientes/crear', 'ClientController@create')->name('client.create');
    Route::post('/clientes/guardar', 'ClientController@store')->name('client.store');
    Route::get('/clientes/editar/{id}', 'ClientController@edit')->name('client.edit');
    Route::patch('/clientes/actualizar', 'ClientController@update')->name('client.update');
    Route::delete('/clientes/eliminar', 'ClientController@destroy')->name('client.delete');
    //Routes services
    Route::get('/servicios', 'ServiceController@index')->name('services');
    Route::get('/servicios/crear/{id}', 'ServiceController@create')->name('service.create');
    Route::post('/servicios/guardar', 'ServiceController@store')->name('service.store');
    Route::get('/servicios/editar/{id}/{idClient}', 'ServiceController@edit')->name('service.edit');
    Route::post('/servicios/actualizar', 'ServiceController@update')->name('service.update');
    Route::delete('/servicios/eliminar', 'ServiceController@destroy')->name('service.delete');
});
