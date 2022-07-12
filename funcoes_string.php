<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Funções específicas para trabalhar com Stirngs</h1>
			
			<?php
				$texto = 'Estudo sobre PHP Completo';

				//string to lower
				echo $texto . '<br/>';
				echo strtolower($texto);

				//string to upper
				echo'<hr/>';
				echo $texto . '<br/>';
				echo strtoupper($texto);

				//string to upper case first, apenas a primeira.
				echo'<hr/>';
				echo $texto . '<br/>';
				echo ucfirst($texto);

				//tamanho da string, contando os espaços em branco
				echo'<hr/>';
				echo $texto . '<br/>';
				echo strlen($texto);

				//str replace, serve para substituir uma determinada cadeia de caracteres
				echo'<hr/>';
				echo $texto . '<br/>';
				echo str_replace('PHP', 'JavaScript', $texto); //é case sensitive

				//substr, retorna parte de uma string
				echo'<hr/>';
				echo $texto . '<br/>';
				echo substr($texto,1,4); //o 4 não é a posição final, mas sim o número de caracteres depois da posição 1. 
			?>
		</body>
	</head>
</html>