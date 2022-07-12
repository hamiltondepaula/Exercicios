<?php
	//Trazendo as bibliotecas para o contexto
	
	require "./bibliotecas/lib1/lib1.php";
	require "./bibliotecas/lib2/lib2.php";

	//teríamos um conflito, porém podemos apelidar
	use A\Cliente as C1;
	use B\Cliente;

	$c = new C1;
	print_r($c);
	echo $c->__get('nome');

	$d = new Cliente;
	print_r($d);
	echo $d->__get('nome');
?>