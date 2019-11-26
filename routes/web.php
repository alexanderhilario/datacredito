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

Route::get('/sin-contrato', 'HomeController@listSinContratar')->name('libre');

Route::get('/contratodos', 'HomeController@listContratados')->name('contratado');

Route::get('/perfil/{id}', 'HomeController@perfil')->name('perfil');

 Route::post('incidencias/{id}','HomeController@historialAfiliado')->name('incidencias');

 Route::get('libere/{id}','HomeController@liberar')->name('libere');


  Route::get('contrato/{id}','HomeController@contratar')->name('contrato');


/*

 API del sistema

*/

  Route::get('lista-de-mis-afiliados','ApiController@myLists');

  Route::post('crear-afiliados','ApiController@addAfiliado');

  Route::post('incidencia/{id}','ApiController@historialAfiliado');

  Route::get('liberar/{id}','ApiController@liberar');

  Route::get('contratar/{id}','ApiController@contratar');

  Route::get('/profile/{id}', 'ApiController@perfil')->name('profile');

  Route::get('lista-de-sin-contratar','ApiController@sinContratoLists');

  Route::get('lista-contratados','ApiController@listsContratado');
