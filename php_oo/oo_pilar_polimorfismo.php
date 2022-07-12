<?php
	
	class Carro extends Veiculo {
		public $teto_solar = true;

		function __construct($placa, $cor){
			$this->placa = $placa;  
			$this->cor = $cor;
		} 

		function abrirTetoSolar(){
			echo "Abrir teto solar.";
		}

		function alterarPosicaoVolante(){
			echo "Alterar Posição do Volante";
		}
	}

	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor){
			$this->placa = $placa;  
			$this->cor = $cor;
		} 

		function empinar(){
			echo'Empinar';
		}

		function trocarMarcha() {
			echo 'Desengatar embreagem com a mão e engatar marcha com o pé.';
		}
	}

	class Veiculo {
		public $placa = null;
		public $cor = null;

		function acelerar(){
			echo "Acelerar.";
		}

		function freiar() {
			echo "Freiar";
		}

		function trocarMarcha() {
			echo 'Desengatar embreagem com o pé e engatar marcha com a mão.';
		}
	}

	//instânciamento dos objetos;
	$carro = new Carro('abc1234', 'branco');
	$moto = new Moto('fgh5678', 'preto');
	
	$carro-> trocarMarcha();
	echo "<br/>";
	$moto-> trocarMarcha();

?>