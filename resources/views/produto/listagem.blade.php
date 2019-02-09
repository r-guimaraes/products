@extends('layout.main')

@section('conteudo')
@if(empty($produtos))
<div class="alert alert-danger">
	Você não tem nenhum produto cadastrado.
</div>

@else
<h1>Listagem de produtos</h1>
<table class="table table-striped table-bordered table-hover">
	@foreach ($produtos as $p)
	<tr class="{{ $p->quantidade <= 1 ? 'alert alert-warning' : '' }}">
		<td>{{ $p->nome }}</td>
		<td>{{ $p->valor }}</td>
		<td>{{ $p->descricao }}</td>
		<td>{{ $p->quantidade }}</td>
		<td>
			<a href="/produto/{{$p->id}}">
				ver + <span class="glyphicon glyphicon-search"></span>
			</a>
		</td>
	</tr>
	@endforeach
</table>

<span class="alert alert-danger pull-right">
	Um ou menos itens no estoque
</span>

@endif

@stop