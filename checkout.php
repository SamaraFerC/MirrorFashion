<!doctype	html>
<html>
	<head>
		<meta	charset="UTF-8">
		<meta	name="viewport" content="width=device-width">
		<script	type="text/javascript" src="js/jquery.js"></script>
		<script	type="text/javascript" src="js/bootstrap.js"></script>
		<link	rel="stylesheet" href="css/bootstrap.css">
		<script	type="text/javascript" src="js/inputmask-plugin.js"></script>
	<!-- 	<link	rel="stylesheet" href="css/index.css"> -->
		<title>Checkout	Mirror	Fashion</title>


	</head>
	<body>
		<nav	class="navbar	navbar-expand-lg	navbar-light	bg-light">
			<button	class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
				<span	class="navbar-toggler-icon"></span>
			</button>
			<a	class="navbar-brand" href="index.html">Mirror	Fashion</a>
				<ul	class="navbar-nav">
					<li	class="nav-item	active">
						<a	class="nav-link" href="sobre.html">Sobre</a>
					</li>
					<li	class="nav-item">
						<a	class="nav-link" href="#">Ajuda</a>
					</li>
					<li	class="nav-item">
						<a	class="nav-link" href="#">Perguntas	frequentes</a>
					</li>
					<li	class="nav-item">
						<a	class="nav-link" href="#">Entre	em	contato</a>
					</li>
				</ul>
		</nav>
	
		
		<div class="jumbotron	jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Ótima	escolha!</h1>
				<p class="lead">Obrigado	por	comprar	na	Mirror	Fashion! Preencha	seus	dados	para efetivar	compra. </p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xl-3">
					
					<div class="card mb-3">
						<div class="card-header">
							<h2>Sua	compra</h2>
						</div>

						<div class="card-body">
							<img	src="img/produtos/foto1-verde.png" alt="Fuzzy	Cardigan" class="img-thumbnail	mb-3">
							<dl>
									<dt>Produto</dt>
									<dd><?=	$_POST['nome']	?></dd>									
									<dt>Cor</dt>
									<dd><?=	$_POST['cor']	?></dd>
									<dt>Tamanho</dt>
									<dd><?=	$_POST['tamanho']	?></dd>
									<dt>Preço</dt>
									<dd id="preco"><?=	$_POST['preco']	?></dd>
							</dl>
							<div class="form-group">
								<label for="qtd">Quantidade</label>
								<input type="number" id="qtd" min="1" max="99" value="1" class="form-control">	
							</div>

							<div class="form-group">
								<label for="total">Total</label>	
								<output for="qtd preco" id="total" class="form-control">129,90</output>
							</div>
						</div>

					</div>
				</div>
						<form class="col-md-8 col-xl-9" >
							<div class="row">
									<fieldset class="col-lg-6">
										<legend>Dados pessoais</legend>
										
										<div class="form-group">
												<div class="input-group	mb-3">
													<div class="input-group-prepend">
														<label class="input-group-text" for="nome">Nome</label>
													</div>
												 <input type="text"  id="nome "name="name"  class="form-control"autofocus required>
												</div>
										</div>


										<div	class="form-group">
											<label	for="email">Email</label>
												<div	class="input-group	mb-3">
												<div	class="input-group-prepend">
													<span	class="input-group-text">@</span>
												</div>
											<input	type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
											</div>
										</div>

										<div class="form-group">
												<div class="input-group	mb-3">
													<div class="input-group-prepend">
														<label class="input-group-text" for="cpf">CPF</label>
													</div>
												<input type="text" name="numero-cartao" id="numero-cartao" class="form-control" <input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00" data-mask="999.999.999-99">
												</div>
										</div>

										<div class="form-group custom-control ">
											<input type="checkbox" class="custom-control-label" name="" for="newsletter" value="sim" checked>								
											<label for="newsletter">Quero receber Nesletter da Fashion Mirror</label>
										</div>
									</fieldset>

									<fieldset class="col-lg-6">
										<legend>Cartão de crédtio</legend>
											<div class="form-group">
												<div class="input-group	mb-3">
													<div class="input-group-prepend">
														<label class="input-group-text" for="numero-cartao">Número- CVV</label>
													</div>
												<input type="text" name="numero-cartao" id="numero-cartao" class="form-control" data-mask="9999	9999 9999 9999 - 999">
												</div>
											</div>

											<div class="form-group">
												<div class="input-group	mb-3">
													<div class="input-group-prepend">
														<label	class="input-group-text" for="bandeira-cartao">Bandeira</label>
													</div>
													<select	class="custom-select" id="bandeira-cartao">
														<option	disabled selected>Selecione	uma	opção...</option>
														<option	value="master">MasterCard</option>
														<option	value="visa">VISA</option>
														<option	value="amex">American	Express</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<div class="input-group	mb-3">
													<div class="input-group-prepend">
														<label class="input-group-text" for="validade-cartao">Validade</label>
													</div>
													<input type="month" class="form-control " id="validade-cartao" name="validade-cartao" >
												</div>
											</div>

									</fieldset>
							
								<button type="submit" class="btn-lg btn btn-primary">
									<span class="oi oi-thumb-up">Confirmar pedido</span>
								</button>
							</div>	
						</form>
			
			</div>
		</div>
	
		<footer>	
			<div class="container">	
			<img src="img/logo-rodape.png" alt="Logo da Mirror Faashion">		
				
				<ul class="social">
					<li><a	href="http://facebook.com/mirrorfashion">Facebook</a> </li>
					<li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
					<li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
				</ul>	
			</div>
		</footer>
	<script	type="text/javascript" src="js/total.js"></script>
	</body>
</html>
