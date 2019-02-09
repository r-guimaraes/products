<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

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

	public function new()
	{
		return view('formulario');
	}

	public function add()
	{
		//$nome = Request::input('')
		$nome = 'boris';
		//DB::insert('INSERT INTO produtos (nome,descricao,valor,quantidade) VALUES (?,?,?,?)';

		return view('produto.criado')->withNome($nome);
	}
}