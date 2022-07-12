<?php
	//criação das interfaces
	
	interface MamiferoInterface{
		public function respirar();
	}

	interface TerrestreInterface{
		public function andar();
	}

	interface AquaticoInterface{
		public function nadar();
	}

	//definindo os modelos
	class Humano implements MamiferoInterface, TerrestreInterface{
		public function andar(){
			echo 'Andar';
		}

		public function respirar(){
			echo 'respirar';
		}

		public function conversar(){
			echo 'Conversar';
		}
	}

	class Baleia implements MamiferoInterface, AquaticoInterface {
		public function respirar(){
			echo 'Respira Baleia.';
		}

		public function nadar(){
			echo 'Nada Baleia.';
		}

		protected function esquichar(){
			echo 'Esquicha Baleia.';
		}
	}



	//--------------------------------------------------------------

	interface AnimalInterface{
		public function comer();
	}

	interface AveInterface extends AnimalInterface{
		public function AveInterface();
	}

	class Papagaio implements AveInterface {
		public function AveInterface(){
			echo "Ave.";
		}

		public function comer(){
			echo "Come papagaio.";
		}


	}
?>