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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/spp', 'SppController@index')->name('spp.index');
Route::get('/spp/create', 'SppController@create')->name('spp.create');
Route::post('/spp/create', 'SppController@store')->name('spp.store');
Route::get('/spp/{id}/edit', 'SppController@edit')->name('spp.edit');
Route::patch('/spp/{id}/edit', 'SppController@update')->name('spp.update');
