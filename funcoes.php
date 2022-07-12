<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Funções</h1>
			
			<?php
				//função do tipo VOID.
				function exibirBoasVindas(){
					echo 'Bem-Vindo!<br/>';
				}

				exibirBoasVindas();

				//função com retorno.
				function calcularAreaTerreno($largura, $comprimento){
					$area = $largura * $comprimento;
					return $area;
				}

				echo "A área do terreno é ".calcularAreaTerreno(30,50);
			?>
		</body>
	</head>
</html>