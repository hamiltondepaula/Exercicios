<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Operadores Aritméticos</h1>
			
			<?php
				$num1 = 13;
				$num2 = 4;

				echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
				echo '<br/>';
				echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2);
				echo '<br/>';
				echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2);
				echo '<br/>';
				echo "A divisão entre $num1 e $num2 é " . ($num1/$num2);
				echo '<br/>';
				// lembrando que o módulo retorna o RESTO inteiro da divisão. 
				echo "O resto da divisão entre $num1 e $num2 é " . ($num1 % $num2);
				echo '<br/>';
			?>
		</body>
	</head>
</html>