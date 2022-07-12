<?php
	namespace B;
	class Cliente implements CadastroInterface {
		public $nome = 'Hamilton';

		public function __construct(){
			echo "<pre>";
			print_r(get_class_methods($this));
			echo "</pre>";
		}
		
		public function __get($atributo) {
			return $this->$atributo;
		}

		public function remover(){	
			echo 'remover';
		}

		public function salvar(){
			echo 'salvar';	
		}
	}

	interface CadastroInterface{
		public function remover();
	}
?>