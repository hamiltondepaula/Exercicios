<?php
	class Pessoa {
		public $nome = null;

		//construtor é iniciado assim que a classe é iniciada. 

		function __construct($nome){
			echo 'Objeto Iniciado';
			$this->nome = $nome;
		}

		function __destruct() {
			echo 'Objeto Removido.';
		}

		function __get($atributo) {
			return $this->$atributo;
		}

		function correr() {
			return $this-> __get('nome') . ' está correndo.';
		}
	}

	$pessoa = new Pessoa('Jorge');
	echo "<br />Nome: " . $pessoa->__get('nome');
	echo "<br />" . $pessoa->correr();

	echo'<br />';
	unset($pessoa); //removido da meomória de forma proposiital, mas ele faz isso sozinho.
?>