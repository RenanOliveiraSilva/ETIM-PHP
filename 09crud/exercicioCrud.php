<html>
	<head>
		<style>
			ul {  list-style-type: square; }

			li { border-style: dashed;
			border-bottom-width: 1px;
			border-right-width: 0;	 
			border-top-width: 0;
			border-left-width: 0;
			}
		</style>
	</head>
	<body>
		<ul>
			<?php

				class Fruta {
					
					public $cor;
					public $nome;
					public $sabor;
					
					public function set_name($nome){
						$this->nome = $nome;
					}
					
					public function get_name(){
						return $this->nome;	
					}
					
					public function set_color($cor){
						$this->cor = $cor;
					}
					
					public function get_color(){
						return $this->cor;
					}

					public function set_sabor($sabor){
						$this->sabor = $sabor;
					}
					
					public function get_sabor(){
						return $this->sabor;
					}
				}
			
				$maca = new Fruta();
				$maca->set_name(' Maçã ');
				$maca->set_color(' Vermelho ');
				$maca->set_sabor(' Doce ');
			   
					
				echo '<li> Nome: ' .$maca->get_name(). '</li>';
				echo '<li> Cor: ' .$maca->get_color(). '</li>';
				echo '<li> Sabor: ' .$maca->get_sabor(). '</li>';
				
			?>
		</ul>
	</body>
</html >