<?php

	class Pessoa {
		private $nome;
		private $cpf;
	
		public function __construct() {
			
		}	
			
		public function __destruct() {
			
			
		}	
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
	
			
		}
		
		public function __get(){
			return $atributo;
			
		}
		
	}

		$pe = new Pessoa();
		$pe->__set('Nome', 'Renan');
		echo $pe->__get('nome');

?>