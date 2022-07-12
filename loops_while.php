<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Estrutura de Repetição While em PHP</h1>
			
			<?php
				/* $num = 1;
				echo 'Início da Repetição <br>';
				while ($num<10) {
					echo $num . '<br>';
					$num++;
				}
				echo '--- Fim da repetição ---';
				*/

				$num = 1;

				while ($num<10) {
					$num++;					
					if ($num == 2 || $num == 6) {
						continue;
					}

					echo "$num . <br/>";
				
				}
				echo '--- Fim da repetição ---';
				

				
			?>
		</body>
	</head>
</html>