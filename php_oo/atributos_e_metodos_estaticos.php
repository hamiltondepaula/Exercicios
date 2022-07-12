<?php
	class Exemplo {
		public static $atributo1 = 'Atributo Estático.';
		public $atributo2 = 'Atributo Normal.';

		public static function metodo1() {
			echo "Método Estático.";
		}

		public function metodo2() {
			echo 'Método Normal.';
		}
	}

	//quando o método ou atributo é estático não precisamos instanciar.
	//podemos usar o nome da classe diretamente. 

	// usamos o Operador de Resolução de Escopo ::

	echo Exemplo::$atributo1;
	echo '<br/>';
	Exemplo::metodo1();
	echo '<br/><hr>';

	//Vamos tentar acessar os outros através do ORE

	echo Exemplo::$atributo2;
	echo '<br/>';
	Exemplo::metodo2();	

?>	
