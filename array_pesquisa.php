<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Funções Nativas para pesquisas em Arrays em PHP</h1>
			
			<?php

				//in_array() -> retorna TRUE ou FALSE para a existência de um item do array;
				//array_search()
				$lista_frutas = ['Banana', 'maça', 'morango', 'uva'];

				echo '<pre>';
				print_r($lista_frutas);
				echo '</pre>';

				// para verificar se 'Maça' existe no array, podemo usar:
				echo in_array('maça', $lista_frutas);
				echo ' -> Se 1, então contém. Se vazio, não contém.' . '<br/>';
				//true -> texto = 1;
				//false -> texto = vazio;

				// array_search retorna o índice do que está sendo procurado
				echo array_search('uva', $lista_frutas) . ' -> Retorna a posição no array.';
				// quando o array_search não encontra nada, ele retorna NULL, o quue é diferente de FALSE.

				//pesquisando em muultidimensionais

				$lista_coisas = [
					'frutas' => $lista_frutas,
					'pessoas' => ['João', 'Maria']
				];

				echo '<pre>';
				print_r($lista_coisas);
				echo '</pre>,<br/>';

				echo in_array('uva', $lista_coisas['frutas']) . ' -> Retorna 1 se existir.';
				//para buscar em todo array multidimensional, precisamos de uma estrutura de Looping.
			?>
		</body>
	</head>
</html>