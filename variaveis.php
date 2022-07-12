<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
		<body>
			<h1>Variáveis</h1>
			<?php
				//string
				$nome = 'Hamilton Gabriel Azevedo de Paula';
				//int
				$idade = 25;
				//float
				$peso = 110.12;
				//Boolean
				$fumante = true;
			?>

			<h1>Ficha cadastral</h1>
			<br/>
			<p>Nome: <?= $nome ?></p>
			<p>Idade: <?= $idade ?></p>
			<p>Peso: <?= $peso ?></p>
			<p>Fumante: <?= $fumante ?></p>
			// Acima está a forma de impressão em PHP
		</body>
	</head>
</html>