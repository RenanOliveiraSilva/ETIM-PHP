<?php
/*Desenvolver um programa em PHP que efetue a soma de todos os números ímpares de 
0 a 100 utilizando a estrutura de repetição DO WHILE e no final mostre o resultado da soma.*/

$i = 0;
$resul = 0;

echo 'Todos os números ímapares de 0 a 100:';
echo '<hr>';
do{
   if ($i % 2 != 0){
	$resul = $resul + $i;
	echo 'Contador:'.$i.'<br>';
   }
    $i++;

    
	
    
} while ($i <= 100);
echo '<hr>';
echo 'A soma de todos esses números é igual a:<br>';
echo $resul.'<br>';

?>