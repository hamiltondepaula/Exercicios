<?php
	// abtração do objeto carro

	//classe filha, específica ou subclasse.
	class Carro extends Veiculo {
		public $teto_solar = true;

		function __construct($placa, $cor){
			$this->placa = $placa; //como a classe filha está extendida a classe pai, os atributos estão no mesmo contexto de aplicação. 
			$this->cor = $cor;
		} //a função mágica de construção recebe dois parâmetros, que são passados na construção do objeto, ou seja, no instânciamento. 

		function abrirTetoSolar(){
			echo "Abrir teto solar.";
		}

		function alterarPosicaoVolante(){
			echo "Alterar Psição do Volante";
		}
	}

	//classe filha, específica ou subclasse.
	//abstração do objeto moto
	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor){
			$this->placa = $placa; //como a classe filha está extendida a classe pai, os atributos estão no mesmo contexto de aplicação. 
			$this->cor = $cor;
		} //a função mágica de construção recebe dois parâmetros, que são passados na construção do objeto, ou seja, no instânciamento. 

		function empinar(){
			echo'Empinar';
		}
	}

	//classe pai, genérica ou superclasse.
	class Veiculo {
		public $placa = null;
		public $cor = null;

		function acelerar(){
			echo "Acelerar.";
		}
	}

	//instânciamento dos objetos;
	$carro = new Carro('abc1234', 'branco');
	$moto = new Moto('fgh5678', 'preto');

	//mostrando na tela
	echo "<pre>";
	print_r($carro);
	echo "<br>";
	print_r($moto);
	echo "</pre>";

	echo "<hr/>";

	$moto->empinar();
	echo "<br/>";
	$moto->acelerar();
?>