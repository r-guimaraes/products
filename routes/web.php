<?php
Route::get('/', function () {
    return view('welcome');
});

// Primeiras rotas de produtos
Route::get('/produtos','ProdutoController@list');
Route::get('/produto/{id}','ProdutoController@show')->where('id', '[0-9]+');
Route::get('/produtos/new', 'ProdutoController@new');
Route::post('/produtos/add','ProdutoController@add');