<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Concatenação</h1>
			<?php

				$nome = 'Gabriel';
				$idade = 25;

				// operador de concatenação é o PONTO.
			echo 'Olá '. $nome . ', sua cor preferida é vermelho e você tem ' . $idade . ' anos.<br/>';

			// Podemos usar aspas dulas para escrever as variáveis diretamente no texto.
			echo "<br/> Olá $nome, sua cor preferida é o vermelho e você tem $idade anos."
			?>
		</body>
	</head>
</html>