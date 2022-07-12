<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Outras aplicações Foreach</h1>
			
			<?php
				$funcionarios = array(
					array('nome' => 'João', 'salario' => '2.500', 'Data de Nascimento' => '12/05/2002'),
					array('nome' => 'Maria', 'salario' => '3.000'),
					array('nome' =>'Julia', 'salario' => '1.500')
					);

				
				echo "<pre>";
				print_r($funcionarios);
				echo "<pre />";
				
				// dentro da variável funcionário temos um array
				foreach ($funcionarios as $idx => $funcionario) {
					foreach ($funcionario as $idx2 => $valor) {
						// valor pode ser nome, salario ou outro valor do array interno.
						echo "$idx2 - $valor. <br />";
					}

					echo "<hr/>";
				}

				// se novos registros forem adicionados a cada funcionário, o foreach consegue pegar as mudanças e saber o novo tamanho do array.

			?>
		</body>
	</head>
</html>