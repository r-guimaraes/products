<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos','ProdutoController@list');

Route::get('/produtos/ver/{id}','ProdutoController@show')
		->where('id', '[0-9]+');

Route::get('/novo', 'ProdutoController@novo');
Route::get('/produtos/add','ProdutoController@add');