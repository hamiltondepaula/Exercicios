<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Array Básico</h1>
			
			<?php
				// array sequenciais(numericos)
				$lista_frutas = array('banana', 'maça', 'morango', 'uva'); //essa é uma função;
				//poderíamos também $lista_frutas = ['banana', 'maça', 'morango', 'uva'];

				//Para debugar, i.e, ver se está funcionando, podemos usar as funções abaixo:

				echo '<pre>';
				var_dump($lista_frutas);
				echo '</pre>';

				echo '<br/> <pre>';
				print_r($lista_frutas);				
				echo'</pre><hr/>';

				//Arrays associativos, que define de forma explícita as chaves;
				$lista_vegetais = array('T' => 'Tomate', 'C' => 'Cebola', 'B' => 'Brócolis'); 
				var_dump($lista_vegetais);
				echo '<br/><pre>';
				print_r($lista_vegetais);
				echo '</pre><br/><br/>';

				echo 'Podemos adicionar mais um valor e uma chave usando a expressão abaixo';
				$lista_vegetais['A'] = 'Alho';
				echo '<br/><pre>';
				print_r($lista_vegetais);
				echo '</pre><br/><br/>';

			?>
		</body>
	</head>
</html>