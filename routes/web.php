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

Route::get('pagina','ConfiguracoesDaPaginaController@index')->name('pagina');
Route::post('pagina-alterar','ConfiguracoesDaPaginaController@store')->name('pagina.store');


Route::post('pedido-para-estagio','PedidoestagioController@store');
Route::post('reademail','PedidoestagioController@read');
Route::post('emailremove','PedidoestagioController@remove');

Route::get('/','IndexController@index')->name('homeInicial');
Route::get('projectos','IndexController@projectos')->name('projectosLista');

Route::get('estagiarios','EstagiarioController@index')->name('estagiarios');
Route::post('estagiariosave','EstagiarioController@store');
Route::post('estagiariosremove','EstagiarioController@remove');
Route::post('estagiariosupdate','EstagiarioController@update');


Route::get('progeto','ProjectoController@index')->name('projectos');
Route::post('projectosave','ProjectoController@store');
Route::post('projectosdelete','ProjectoController@remove');
Route::post('projectosupdate','ProjectoController@update');




Route::get('estagiario-projecto','ProjectoEstagioController@index')->name('projectoestagio');
Route::post('estagiarioprojecto.store','ProjectoEstagioController@store')->name('estagiarioprojecto.store');
Route::post('estagiariosprojectoremove','ProjectoEstagioController@delete');



Route::get('user-all','UserController@index')->name('user.index');
Route::post('usuariosave','UserController@store');
Route::post('passwordupdate','UserController@update');
Route::post('usuarioremove','UserController@remove');

Route::get('mensagens-email','PedidoestagioController@index')->name('emails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



