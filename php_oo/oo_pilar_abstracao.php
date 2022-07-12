<?php
	class Funcionario {

		//atributos
			public $nome = null;
			public $telefone = null;
			public $numFilhos = null;
			public $cargo = null;
			public $salario = null;

		//getters e setter com overloadin/sobrecarga) ao invés da forma que está comentada logo após. 
			function __set($atributo, $valor){
				$this->$atributo = $valor; 
				//normamente o "this" mexe nas variáveis no contexto da classe, porém nesse caso, o acesso é variável de acordo com o parâmetro $atributo de entrada escolhido. 
			}

			function __get($atributo){
				return $this->$atributo;
			}

		//métodos -> na prática são funções;

			function resumirCadFunc(){
				return $this-> __get('nome') . "possui" . $this->__get('numFilhos') . "filhos(s).";
			}

			function modificarNumFilhos($numFilhos){
				$this->numFilhos = $numFilhos; 
			}
	
	}

	$y = new Funcionario();
	
	$y->__set('nome', 'José');
	$y->__set('numFilhos',4);
	
	//echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s)';
	
?>