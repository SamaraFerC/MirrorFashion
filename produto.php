
<body>
	<?php include("cabecalho.php") ?>
		<div class="produto-back">
			<div class="container">
				<div class="produto">
					<h1>Fuzzy Cardigan</h1>
					<p>Por apenas R$129,90</p>	

					<form action="checkout.php" method="POST">
						<input	type="hidden" name="nome" value="Fuzzy	Cardigan">
						<input	type="hidden" name="preco" value="129,00">
						<fieldset class="cores">
							<legend> Escolha a cor:</legend>

							<input type="radio" name="cor" value="verde" id="verde" checked>
							<label for="verde">
								<img src="img/produtos/foto1-verde.png" alt="Produto na cor verde">
							</label>

							<input type="radio" name="cor" value="rosa" id="rosa">
							<label for="rosa">
								<img src="img/produtos/foto1-rosa.png" alt="Produto na cor rosa">
							</label>

							<input type="radio" name="cor" value="azul" id="azul">
							<label for="azul">
								<img src="img/produtos/foto1-azul.png" alt="Produto na cor azul">
							</label>
						</fieldset>
				
						<fieldset class="tamanhos">
							<legend>Escolha o tamanho: </legend>
								<input	type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
							<output	for="tamanho" name="valortamanho" id="valortamanho">42</output>
							
						</fieldset>

						<button class="comprar" >Comprar</button>
					</form>

				</div>

				<div class="detalhes">
					<h2>Detalhes	do	produto</h2>
					<p>Esse	é	o	melhor	casaco	de	Cardigã	que	você	já	viu.	Excelente material	italiano	com	estampa	desenhada	pelos	artesãos	da comunidade de	Krotor	nas	ilhas	gregas.	Compre	já	e	receba	hoje mesmo	pela	nossa	entrega	a	jato.</p>

					<table>	
						<thead>
							<tr>
								<th>Caracteristica</th>
								<th>Detalhes</th>
							</tr>
						</thead>

						<tbody>
							<tr>	
								<td>Modelo</td>
								<td>Cardiça 7845</td>
							</tr>
							<tr>	
								<td>Material</td>
								<td>Algodão e poliester</td>
							</tr>
							<tr>	
								<td>Cores</td>
								<td>Azul, rosa e verde</td>
							</tr>
							<tr>	
								<td>lavagem</td>
								<td>A mão</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>		

	<?php include("rodape.php") ?>
</body>
</html>