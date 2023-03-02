<!DOCTYPE html>
<html>
	<head>
	<style>
		table {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 55%;
		}
		
		table td, table th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}
		
		table tr:nth-child(even){background-color: #f2f2f2;}

		table tr:hover {background-color: #ddd;}
		
		table th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #04AA6D;
		  color: white;
		}
		
			
	</style>

	</head>
	
	<body>
		
		<h1 align = 'center'>Formulário Margem</h1>
		<hr>
	   

			<?php
			
				   class Cliente{
					

	
					private $nome;
					private $cpf;
					private $margem;
					public $salf;
					
			
					
					public function __set($atributo, $valor){
						$this->$atributo = $valor;
					}
					
					public function __get($atributo){
						return $this->$atributo;
					}
					
					public function calMargem($salario){
						if (empty($salario)){
						$salario = 0;
						$this->margem = $salario * 0.3;
						}else {
						$this->margem = $salario * 0.3;
						}
						
					}
					
				} 
                
	   			    if ($_SERVER["REQUEST_METHOD"] == "POST"){
					$name = htmlspecialchars($_REQUEST["fname"]);
					$cpf = htmlspecialchars($_REQUEST["fcpf"]);
					$salario = htmlspecialchars($_REQUEST["fsal"]);

				
			

				$cli = New Cliente;
				$cli-> __set('nome',$name);
				$cli-> __set('cpf',$cpf);
				$cli->calMargem($salario);

					echo '<table align = center>';
					echo '<tr>';
					echo '<th> Nome </th>';
					echo '<th> CPF </th>';
					echo '<th> Margem </th>';
					echo '</tr>';
					
					echo '<tr>';
					echo '<td>' .$cli->__get('nome'). '</td>';
					echo '<td>' .$cli->__get('cpf'). '</td>';
					echo '<td>' .$cli->__get('margem'). '</td>';
					echo '<tr>';
					echo '</table>';
					

				}
					
			?>
		<br><hr>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Nome: <input type="text" name="fname" required>
		CPF: <input type="number" name="fcpf" required>
		Salário: <input type="number" name="fsal" required>
		<input type = "submit"><br><hr>

	</body>
</html>
