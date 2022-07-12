<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Foreach</h1>
			
			<?php
				$itens = array('sofa', 'mesa', 'cadeira', 'fogao', 'geladeira');

				echo '<pre>';
				print_r($itens);
				echo '</pre>';

				foreach ($itens as $item) {
					echo "$item<br/>";
				}
			?>
		</body>
	</head>
</html>