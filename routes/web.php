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

Route::resource('cliente', 'ClientController');

Route::resource('insumo', 'InsumoController');

Route::get('insumo/{slug}', [
		'as' => 'insumo-detail',
		'uses' => 'CompraController@show'
]);

Route::get('compra/addInsumo', [
		'as' => 'insumos-list',
		'uses' => 'CompraController@addinsumo'

]);

Route::resource('compra', 'CompraController');

Route::get('admin', function(){

	return view('admin.dashboard');
});
