<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Atribuição e Operadores</h1>	
			<?php
				$x = 10;
				//aproach convencional
				$x = $x + 10;
				//podemos usar o seguinte:
				$x += 8;
				//aqui x vale 2´8.
				$y = 8;

				$x += $y;
				echo $x;
				echo '<br/>';

				$x -= $y;
				echo $x;
				echo '<br/>';

				$x *= $y;
				echo $x;
				echo '<br/>';

				$x /= $y;
				echo $x;
				echo '<br/>';

				$x %= $y;
				echo $x;
				echo '<br/>';
			?>
		</body>
	</head>
</html>