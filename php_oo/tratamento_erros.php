<?php
	try{
		//contém uma lógica que pode gerar um erro.
		echo "<h3> *** Try ***";

		//require de um arquivo que pode não existir.
		//a função abaixo verifica de o arquivo existe.  
		if (!file_exists('require_arquivo_a.php')){
			throw new Exception("O arquivo deveria estar disponível às " . date('d/m/Y H:i:s'));
			
			//acima estamos instanciando um objeto(new, operador de instância) através de uma classe nativa do php (Exception), e esse objeto instanciado é lançado para aplicação pelo throw
		}

	} catch(Error $e) { //erro é recebido aqui como $e.
		//se hover erro em try, ele executa o catch.
		echo "<h3> *** Catch ERRO***";
		echo '<p style="color:red">' . $e . '</p>';

	}catch(Exception $e){
		//estamos pegando a exceção criada "erro").
		echo "<h3> *** Catch EXCEÇÃO***";
		echo '<p style="color:red">' . $e . '</p>';
	}finally{
		echo "<h3> *** Finally ***";
	}

	//se o erro estivesse fora do bloco try
	//teríamos um fatal error. 
?>