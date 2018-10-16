	<?php
		$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"mirrorfashion");
		$dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos");
		$produto	=	mysqli_fetch_array($dados);
	?>
	<body>
	<?php include("cabecalho.php") ?>

		<div class="container destaques"> <!-- destaques -->
			<section>
				<form class="busca">
					<input type="search" class="busca" name="busca">
					<button></button>
				</form>

			</section>
			<!-- Fim busca -->
			<section class="menu-departamentos">
				<h2> Departamentos</h2>
				<nav>
					<ul>
						<li>
							<a href="">Blusas e Camisas</a>
							<ul>
								<li><a href="#">Manga curta</a> </li>
								<li><a href="#">Manga comprida</a> </li>
								<li><a href="#">Camiseta social</a> </li>
								<li><a href="#">Camisa Social</a> </li>

							</ul>
						</li>
						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessórios</a></li>
					</ul>

				</nav>
			</section>
			<!-- fim menu departamentos -->
			
			<section class="banner-destaque">
				<figure>
					<img src="img/destaque-home.png" alt="Promoção big city night">
				</figure>
			</section>
			<!--  Fim banner destaque-->

		</div><!-- fim .container . destaque -->

		<div class="container paineis ">
			<section class="painel novidades 	 ">
				<h2> Novidades</h2>
				<ol>
					<?php
						$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"mirrorfashion");
						$dados	=	mysqli_query($conexao, "SELECT	* FROM produtos LIMIT 0, 12");
						while	($produto	=	mysqli_fetch_array($dados)):
					?>
					<li>
						<a	href="produto.php?id=<?=	$produto['id']	?>">
							<figure>
								<img src="img/produtos/miniatura<?=	$produto['id']	?>.png" alt="<?= $produto['nome']	?>">
								<figcaption>
									<?=	$produto['nome']	?>	por	<?=	$produto['preco']	?>
								</figcaption>
							</figure>
						</a>
					</li>
					<?php	endwhile;	?>
				</ol>

				<button type="button">Mostrar mais</button>
			</section>


			<section class="painel  mais-vendidos">	
				<h2> Mais vendidos</h2>
				<ol>
					<?php
						$conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"mirrorfashion");
						$dados	=	mysqli_query($conexao, "SELECT	* FROM produtos ORDER BY vendas LIMIT 0, 12 ");
						while	($produto	=	mysqli_fetch_array($dados)):
					?>
					<li>
						<a	href="produto.php?id=<?=	$produto['id']	?>">
							<figure>
								<img src="img/produtos/miniatura<?=	$produto['id']	?>.png" alt="<?=	$produto['nome']	?>">
								<figcaption>
									<?=	$produto['nome']	?>	por	<?=	$produto['preco']	?>
								</figcaption>
							</figure>
						</a>
					</li>
					<?php	endwhile;	?>
				</ol>
					<button type="button">Mostrar mais</button>
					<script type="text/javascript">
					
						$('.painel	button').click(function() {
							$(this).parent().toggleClass('painel-aberto');
						});

				</script>
			</section>

		</div>

	<?php include("rodape.php") ?>
	</body>
</html>