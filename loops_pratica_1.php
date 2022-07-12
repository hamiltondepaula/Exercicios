<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Percorrendo Arrays</h1>
			
			<?php
				$registros = array(
					array('titulo' => 'título notícia 1', 'conteudo' => 'Conteúdo Notícia 1'), 
					array('titulo' => 'título notícia 2', 'conteudo' => 'Conteúdo Notícia 2'), 
					array('titulo' => 'título notícia 3', 'conteudo' => 'Conteúdo Notícia 3'),
					array('titulo' => 'título notícia 4', 'conteudo' => 'Conteúdo Notícia 4')
				);
				
				// printr para debugar
				echo "<pre>";
				print_r($registros);
				echo "</pre>";

				//recuperando informações com while
				
				echo 'O Array possui:' . count($registros) . ' Registros de Noticias.';
				$idx = 0;
				while ($idx<count($registros)) {
					echo '<h3>' . $registros[$idx]['titulo'] . '<h3>';
					echo '<h3>' . $registros[$idx]['conteudo'] . '<h3>';
					echo "<br>";
					$idx++;
				}
			?>
		</body>
	</head>
</html>