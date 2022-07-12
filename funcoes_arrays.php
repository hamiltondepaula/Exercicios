<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Funções Nativas para Arrays em PHP</h1>
			
			<?php
				//is_array
				$array = 'string';
				$retorno = is_array($array);

				if($retorno){
					echo "Sim, é um array.";
				} else {
					echo "Não é um array.";
				}
				echo '<hr/>';

				//array_keys(array)

				$array = [1=> 'a', 7 => 'b', 18 => 'c'];
				echo '<pre>';
					print_r($array);
				echo '</pre>' . 'As chaves do array acima são exibidas ao lado em um novo array numérico sequencial: ';
				$chaves_array = array_keys($array);
				print_r($chaves_array);
				echo '<hr/>';		

				//sort(array)
				$array = array('mouse', 'cabo hdmi', 'gabinete', 'notebook', 'fonte');
				echo '<pre>';
					print_r($array);
				echo '</pre>';

				sort($array); // ele retorna true or false, true se ele consguiu ordenar o array original. 

				echo '<pre>' . ' Abaixo teremos o array acima de forma ordenada alfabeticamente: <br><br>';
					print_r($array);
				echo '</pre>';
				echo '<hr/>';

				//asort($array)
				$array = array('mouse', 'cabo hdmi', 'gabinete', 'notebook', 'fonte');
				echo '<pre>';
					print_r($array);
				echo '</pre>';

				asort($array); // ele retorna true or false, true se ele consguiu ordenar o array original. 

				echo '<pre>' . ' Abaixo teremos o array acima de forma ordenada alfabeticamente, porém preservando a relação índice-valor: <br><br>';
					print_r($array);
				echo '</pre>';
				echo '<hr/>';

				//count -> conta quantos elementos existem dentro de um array.
				$array = array('mouse', 'cabo hdmi', 'gabinete', 'notebook', 'fonte');
				echo '<pre>';
					print_r($array);
					echo count($array) . ' -> Esse é o número de elementos no array acima.';
				echo '</pre><hr/>';

				//array_merge(array) -> funde vários arrays em um único.
				$array1 = ['osx', 'windows'];
				$array2 = array('linux');
				$array3 = ['solaris'];

				$novo_array = array_merge($array1, $array2, $array3);

				echo '<pre> Abaixo temos o novo array que junta o array 1, 2 e 3. <br>';
					print_r($novo_array);
				echo '</pre><hr/>';

				//explode($string)
				$string = '26/04/2018';
				$array_retorno = explode('/', $string);
				echo '<pre> Abaixo temos o novo array que separa a string num array de acordo com o delimitador especificado. <br>';
					print_r($array_retorno);
				echo '</pre><hr/>';

				//implode($string)
				$array = ['a', 'b', 'x', 'y'];
				$string_retorno = implode('-', $array);
				echo $string_retorno;
			?>
		</body>
	</head>
</html>