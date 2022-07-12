<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Teste de if/else e-commerce</h1>
			<?php
				 
				$usuario_possui_cartao_loja = true;
				$valor_compra = 225;
				$recebeu_desconto_frete = false;

				if($usuario_possui_cartao_loja == true && $valor_compra>= 100){
					$valor_frete = 0;
					$recebeu_desconto_frete = true;
				}

			?>

			<h1>Detalhes do Pedido</h1>

			<p>Possui o cartão da loja? <?= $usuario_possui_cartao_loja?'Sim' : 'Não.'?>
				<?php			
					/*if($usuario_possui_cartao_loja == true){
						echo 'Sim!';
					}else{
						echo 'Não.';
					}*/

					//operador ternário <condição> ? true:false

				?>
			</p>
			
			<p> Valor da compra: <?= $valor_compra?></p>

			<p>Recebeu descontono frete?
				<?php 
					
					$teste = $recebeu_desconto_frete?'Sim' : 'Não';
					echo $teste;

					/*if($recebeu_desconto_frete == true){
						echo 'Sim.';
					} else{
						echo 'Não.';
					}*/
				?>
			</p>

			<p> O valor do frete é: <?= $valor_frete?></p>
		</body>
	</head>
</html>