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
Route::resource('/painel/sitecadastro','Painel\CadsiteController');
Route::resource('/painel/galeria','Painel\FotoController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::post('/albums/store', 'AlbumsController@store');
