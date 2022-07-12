<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Casting de Tipos</h1>
			
			<?php
				//gettype() -> retorna o tipo da variável. 

				$valor = 10;

				echo gettype($valor); // retorna um inteiro.
				echo '<br/>';

				//convertendo

				$valor2 = (float) $valor;

				echo $valor. ' é ' . gettype($valor);
				echo '<br/>';
				echo'Depois do casting de tipo';
				echo $valor2. ' é ' .gettype($valor2);

				echo '<br/>';
				$valor3 = (string)$valor2;
				echo $valor2. ' é ' . gettype($valor2);
				echo '<br/>';
				echo'Depois do segundo casting de tipo';
				echo $valor3. ' é ' .gettype($valor3);				
			?>
		</body>
	</head>
</html>