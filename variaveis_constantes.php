<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Variáveis Constantes</h1>
			<?php

				define('BD_URL', 'endereco_bd_dev');
				define('BD_USUARIO', 'usuario_dev');
				define('BD_SENHA', 'senha_dev');

				echo BD_URL . '<br/>';
				echo BD_USUARIO . '<br/>';
				echo BD_SENHA. '<br/>';

			?>
		</body>
	</head>
</html>