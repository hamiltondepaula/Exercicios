<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>False, Null e Empty</h1>
			
			<?php
				//false é um tipo de variável boolean
				//null e empty são valores especiais

				$funcionario1 = null;
				$funcionario2 = '';

				//valores null
				echo "null com is_null <br/>";
				if(is_null($funcionario1)){
					echo "Sim, a variável é null";
				}else {
					echo "Não, a variável não é null.";
				}

				echo '<br/><hr/>';
				echo "vazio com is_null <br/>";
				if(is_null($funcionario2)){
					echo "Sim, a variável é null";
				}else {
					echo "Não, a variável não é null.";
				}

				echo '<br/><hr/>';
				echo "vazio com empty <br/>";
				if(empty($funcionario1)){
					echo "Sim, a variável está vazia.";
				}else {
					echo "Não, a variável não está vazia.";
				}

				echo '<br/><hr/>';
				echo "vazio com empty <br/>";
				if(empty($funcionario2)){
					echo "Sim, a variável está vazia.";
				}else {
					echo "Não, a variável não está vazia.";
				}

				$funcionario3 = false;

				echo '<br/><hr/>';
				echo "false com empty <br/>";
				if(empty($funcionario3)){
					echo "Sim, a variável está vazia.";
				}else {
					echo "Não, a variável não está vazia.";
				}

				echo '<br/><hr/>';
				echo "false com is_null <br/>";
				if(is_null($funcionario3)){
					echo "Sim, a variável é null";
				}else {
					echo "Não, a variável não é null.";
				}
			?>
		</body>
	</head>
</html>