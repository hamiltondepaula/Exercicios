<?php
	// começamos criando duas classe com conflitos de nomes
	
	namespace A;

	class Cliente implements CadastroInterface, \B\CadastroInterface{
		public $nome = 'Gabriel';

		public function __construct(){
			//$this está passando o próprio objeto em questão.
			echo "<pre>";
			print_r(get_class_methods($this));
			echo "</pre>";
		}

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function salvar(){

		}

		public function remover(){

		}
	}

	interface CadastroInterface{
		public function salvar();
	}
	//---------------------------------------
	namespace B;
	class Cliente implements CadastroInterface {
		public $nome = 'Gabriel';

		public function __construct(){
			//$this está passando o próprio objeto em questão.
			echo "<pre>";
			print_r(get_class_methods($this));
			echo "</pre>";
		}
		
		public function __get($atributo) {
			return $this->$atributo;
		}

		public function remover(){
			
		}
	}

	interface CadastroInterface{
		public function remover();
	}

	$c = new \A\Cliente();
	print_r($c);
	echo $c->__get('nome');
?>