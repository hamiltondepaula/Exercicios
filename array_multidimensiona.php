<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Arrays Multidimensionais</h1>
			
			<?php
				$lista_coisas = []; //ou $lista_coisas = array();

				$lista_coisas ['frutas'] = array(1 => 'Banana', 2 => 'Maçâ', 3 => 'Morango', 4 => 'Uva');
				//acima ajustamos os índices atribuindo uma chave numerica, poderia string, para que não comece em zero.
				
				$lista_coisas ['pessoas'] = [1 => 'João',2 => 'José', 3 => 'Maria'];

				echo '<pre>';
				print_r($lista_coisas);
				echo '</pre><hr/>';

				echo $lista_coisas['frutas'][3]; //recuperando dados de array multidimensional.
				echo '<br/>';
				echo $lista_coisas['pessoas'][2];

			?>
		</body>
	</head>
</html>