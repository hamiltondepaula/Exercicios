<?php
	class MinhaExceptionCustomizada extends Exception {
		private $erro = '';

		public function __construct($erro){
			$this->erro=$erro;
		//o método mágico construct recebe um parãmetro 
		//que é atribuído ao atributo do objeto ($this->erro)
		}
		public function exibirMensagemErroCustomizada(){
			echo '<div style = "border: solid 1px #000; padding: 15px; background-color: red; color: white;">';
				echo$this->erro;
			echo '</div>';
		}
	}
	try{
		throw new MinhaExceptionCustomizada('Esse é um erro de Teste.');
	} catch (MinhaExceptionCustomizada $e){
		echo $e->exibirMensagemErroCustomizada();
	}
?>