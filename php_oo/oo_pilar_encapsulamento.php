<?php
	
	 class Pai {
	 	private $nome = 'Gabriel';
	 	protected $sobrenome = 'Azevedo';
	 	public $humor = 'Feliz';

	 	private function executarMania(){
	 		echo "Assobiar";
	 	}

	 	protected function responder(){
	 		echo "Oi";
	 	}

	 	public function executarAcao(){
	 		$this->executarMania();
	 		echo "<br/>";
	 		$this->responder();
	 	}

	 	
	 }

	 class Filho extends Pai {
	 	//a função construtora é executado durante a criação do objeto (durante o instanciamento)
	 	public function __construct(){
	 		echo "<pre>";
	 		print_r(get_class_methods($this));
	 		echo "</pre>";
	 		//a função no printR recupera os métodos e os joga num array.
	 	}
	 } 

	 $filho = new Filho();
	 echo '<pre>';
	 print_r($filho);
	 echo '</ pre>'; 

	// exibir os métodos do objeto
	 echo '<pre>';
	 print_r(get_class_methods($filho)); //retorna um array
	 echo '</pre>';

	// get e set mágicos conseguem rastrear a referência de busca por um atributo privado. 

	 echo $filho->__get('nome');
	 echo "<br>";
	 $filho->__set('nome', 'Hamilton');
	 echo "<br>";
	 echo $filho->__get('nome');
	 
	 echo '<pre>';
	 print_r($filho);
	 echo '</ pre>'; 
?>