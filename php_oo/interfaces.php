<?php
	
	interface EquipamentoEletronicoInterface {
		public function ligar(); 
		//não usamos chaves porque interface não implementa metodo. 
		public function desligar();
	}
	//-------------------------------------------------------------

	class Geladeira implements EquipamentoEletronicoInterface {
		public function abrirPorta(){
			echo "Abrir a porta.";
		}

		public function ligar(){
			echo "ligar";
		}

		public function desligar(){
			echo "desligar";
		}
	}

	class TV implements EquipamentoEletronicoInterface {
		public function trocarCanal(){
			echo 'Trocar Canal';
		}

		public function ligar(){
			echo "ligar";
		}

		public function desligar(){
			echo "desligar";
		}
	}

	$x = new Geladeira();
	$y = new TV();
?>