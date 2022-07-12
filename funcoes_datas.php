<html>
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<body>
			<h1>Funções para datas</h1>
			
			<?php
				//recuperação da data atual do sistema ou data corrente;

				echo date('d') . ' Esse é o dia atual. <br/><hr/>';

				echo 'Recuperando uma data completa ->' . date('d/m/Y H:i') . '<br/><hr/>'; //podemos alterar a sequência e a separação.

				echo date_default_timezone_get() . ' -> Essa é a time zone';

				//se tivermos acesso ao ambiente onde o php est´instalado, devemos mudar lá o time zone;
				// caso contrário, podemos fazer em tempo de execução, como mostrado abaixo;
				// para descobrir o nosso time zone, podemos acessar a doc do PHP. https://www.php.net/manual/en/timezones.php

				echo date_default_timezone_set('America/Sao_Paulo') . '<br/><hr/>';
				echo date('d/m/Y H:i') . ' Essa é a nova data de acordo com o novo timezone default.<br/><hr/>';

				//fazendo a diferença entre datas

				$data_inicial = '2018-04-24';
				$data_final = '2018-05-15';

				//os calculos são feitos com base na data 01/01/1970.
				//string para algo que possa ser calculado, é transformado em segundos. Já em JS a conversão é feita para milisegundos;

				$time_inicial = strtotime($data_inicial);
				$time_final = strtotime($data_final);

				echo $data_inicial . ' -> ' . $time_inicial . ' e  ' . $data_final . ' -> ' . $time_final . '<br/><hr/>';

				$diferenca_times = $time_final - $time_inicial;

				$diferenca_times_em_dias = $diferenca_times/(24*60*60);

				echo "A diferença de $diferenca_times segundos é, em dias, " . $diferenca_times_em_dias . '.';
			?>
		</body>
	</head>
</html>