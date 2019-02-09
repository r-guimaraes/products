<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
	public function list() 
	{
		$_produtos = DB::select('SELECT * FROM produtos');

		return view('produto.listagem')->withProdutos($_produtos);
	}

	public function show($id) 
	{
		$produto = DB::select('SELECT * FROM produtos WHERE id=?',[$id]);

		if (empty($produto)) {
		   return "Esse produto não existe";
		 }

		return view('produto.ver')->withProduto($produto[0]);
	}

	public function new() {
		return view('produto.formulario');
	}

	public function add()
	{		
		$nome = Request::input('nome');
		$descricao = Request::input('descricao');
	  	$valor = Request::input('valor');
	  	$quantidade = Request::input('quantidade');

	  	// TODO: passar pra model
		DB::insert('insert into produtos values (null, ?, ?, ?, ?)', [$nome, $valor, $descricao, $quantidade]);

		return view('produto.criado')->withNome($nome);
	}
}