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

Route::group(['prefix'=>'pedido', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'pedido',           'uses'=>'PedidoController@index']);
    Route::get('create',        ['as'=>'pedido.create',    'uses'=>'PedidoController@create']);
    Route::get('{id}/destroy',  ['as'=>'pedido.destroy',   'uses'=>'PedidoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'pedido.edit',      'uses'=>'PedidoController@edit']);
    Route::put('{id}/update',   ['as'=>'pedido.update',    'uses'=>'PedidoController@update']);
    Route::post('store',        ['as'=>'pedido.store',     'uses'=>'PedidoController@store']);
});

Route::group(['prefix'=>'fornecedor', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'fornecedor',           'uses'=>'FornecedorController@index']);
    Route::get('create',        ['as'=>'fornecedor.create',    'uses'=>'FornecedorController@create']);
    Route::get('{id}/destroy',  ['as'=>'fornecedor.destroy',   'uses'=>'FornecedorController@destroy']);
    Route::get('{id}/edit',     ['as'=>'fornecedor.edit',      'uses'=>'FornecedorController@edit']);
    Route::put('{id}/update',   ['as'=>'fornecedor.update',    'uses'=>'FornecedorController@update']);
    Route::post('store',        ['as'=>'fornecedor.store',     'uses'=>'FornecedorController@store']);
});

Route::group(['prefix'=>'produto', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'produto',           'uses'=>'ProdutoController@index']);
    Route::get('create',        ['as'=>'produto.create',    'uses'=>'ProdutoController@create']);
    Route::get('{id}/destroy',  ['as'=>'produto.destroy',   'uses'=>'ProdutoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'produto.edit',      'uses'=>'ProdutoController@edit']);
    Route::put('{id}/update',   ['as'=>'produto.update',    'uses'=>'ProdutoController@update']);
    Route::post('store',        ['as'=>'produto.store',     'uses'=>'ProdutoController@store']);
});

/*Route::get('fornecedor', 'FornecedorController@index');
Route::get('fornecedor/create', 'FornecedorController@create');
Route::post('fornecedor/store', 'FornecedorController@store');
Route::get('fornecedor/{id}/destroy', 'FornecedorController@destroy');
Route::get('fornecedor/{id}/edit', 'FornecedorController@edit');
Route::put('fornecedor/{id}/update', 'FornecedorController@update');

Route::get('produto', 'ProdutoController@index');
Route::get('produto/create', 'ProdutoController@create');
Route::post('produto/store', 'ProdutoController@store');
Route::get('produto/{id}/destroy', 'ProdutoController@destroy');
Route::get('produto/{id}/edit', 'ProdutoController@edit');
Route::put('produto/{id}/update', 'ProdutoController@update');

Route::get('pedido', 'PedidoController@index');
Route::get('pedido/create', 'PedidoController@create');
Route::post('pedido/store', 'PedidoController@store');
Route::get('pedido/{id}/destroy', 'PedidoController@destroy');
Route::get('pedido/{id}/edit', 'PedidoController@edit');
Route::put('pedido/{id}/update', 'PedidoController@update');

/*Route::get('fornecedor', function (){
    return "Olá";
});*/
