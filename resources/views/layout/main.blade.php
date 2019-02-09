<html>
<head>
	<link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.css">
	<title>Controle de estoque</title>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
			<div class="container-fluid">

				<div class="navbar-header">      
					<a class="navbar-brand" href="/">Home</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item"><a href="{{action('ProdutoController@list')}}" class="nav-link">Ver produtos</a></li>
					<li class="nav-item"><a href="{{action('ProdutoController@new')}}" class="nav-link">Adicionar</a></li>
				</ul>

			</div>
		</nav>
		@yield('conteudo')
	</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">2019 © Estoque de Produtos</span>
		</div>
	</footer>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>