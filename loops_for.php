<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Estrutura de Repetição FOR</h1>
			
			<?php
				for($x = 1; $x<=10; $x++){
					echo "x = $x. <br>";
				}

				// o critério pode estar dentro da estrutura de repetição
				echo "<br><hr>";
					
				for($x = 1; true; $x++){

					if ($x>=20) {
						break;
					}
					echo "x = $x. <br>";
				}
			?>
		</body>
	</head>
</html>