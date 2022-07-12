<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Funções Matemáticas</h1>
			
			<?php
				$num = 7.3;
				echo ceil($num) . ' Arredondamento para CIMA. <br/> <hr/>';

				echo floor($num) . ' Arredondamento para BAIXO. <br/> <hr/>';

				echo round($num)  . ' Arredondamento com base na fração decimal. <br/>';
				echo "De cinco para cima o round() arredonda para cima. <hr/>";

				echo rand() . ' Gera um valor aleatório de zero até randmax. <br/> <hr/>';

				//para sabermos o valor desse range max, popemos usar a função abaixo:
				echo getrandmax() . '. Esse é o vallor máximo do rand. <br/><hr/>';

				echo "Podemos passar valores para o rand -> " . rand(10,50) . '. Agora eles estão entre 10 e 50. <br/><hr/>';

				echo 'A raiz quadrada pela função sqrt() de 49 é -> ' . sqrt(49) . '<br/><hr/>';


			?>
		</body>
	</head>
</html>