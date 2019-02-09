@extends('layout.main')
@section('conteudo')
	<form action="/produtos/add">
		<div class="form-group">
			<label>Nome</label>
			<input type="" name="nome" class="form-control">
		</div>
		<div class="form-group">
			<label>Descrição</label>
			<input type="" name="descricao" class="form-control">
		</div>	
		<div class="form-group">
			<label>Valor</label>
			<input type="" name="valor" class="form-control">
		</div>
		<div class="form-group">
			<label>Quantidade</label>
			<input type="" name="quantidade" class="form-control">
		</div>
		<button class="btn btn-primary" type="submit">Adicionar</button>
	</form>
@stop