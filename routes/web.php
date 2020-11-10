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

Route::prefix('home')->group(function () {
Route::get('/planetas/{page?}', 'PlanetaController@planetas')->name('planetas');
Route::get('/lista', 'PlanetaController@listaPlanetas')->name('lista.planetas');
Route::get('/detalhes', 'PlanetaController@detalhesPlanetas')->name('detalhe.planetas');
Route::post('/salvar', 'PlanetaController@salvarPlaneta')->name('salvar.planetas');



    Route::get('/naves/lista/{page?}', 'NaveController@listar')->name('lista.naves');
    Route::get('/naves/datalhes', 'NaveController@detalhesNave')->name('detalhe.naves');
    Route::post('/naves/salvar', 'NaveController@salvarNave')->name('salvar.naves');
    Route::get('/itens', 'HomeController@itemSalvo')->name('itens.salvos');

});