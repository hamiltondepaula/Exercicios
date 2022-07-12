<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Switch</h1>
			
			<?php

				$parametro = 5;
				switch ($parametro){
					case 1:
						echo 'Entrou no case 1.';
					break;

					case 2:
						echo 'Entrou no case 2.';
					break;

					case 3:
						echo 'Entrou no case 3.';
					break;
	
					default:
						echo 'Não entrou em nada.';
					break;
				}
			?>
		</body>
	</head>
</html>