<?php
/*Desenvolva um programa em PHP que utilize a estrutura de 
repetição While e mostre os números de 0 a 50, apenas os pares.*/

$i = 0;

while ($i <= 50){
	if($i % 2 == 0){
	echo 'Contador: '.$i.'<br>';
	}
	$i++;
}
?>