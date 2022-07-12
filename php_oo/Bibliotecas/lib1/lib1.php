<?php
	namespace A;
	class Cliente implements CadastroInterface{
		public $nome = 'Gabriel';

		public function __construct(){
			echo "<pre>";
			print_r(get_class_methods($this));
			echo "</pre>";
		}

		public function __get($atributo) {
			return $this->$atributo;
		}

		public function salvar(){
			echo 'salvar';
		}

		public function remover(){
			echo 'remover';
		}
	}

	interface CadastroInterface{
		public function salvar();
	}
	//---------------------------------------
?>