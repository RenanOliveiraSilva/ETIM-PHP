<?php
/*Desenvolva um programa em PHP que mostre a 
tabuada de um número que usuário digitar.*/

$i = 0;
$tab = 3;

echo 'Tabuada do '.$tab.':<br>';
while ($i <= 10){
 echo $tab.' x '.$i.' = '.($i * $tab).'<br>';
 $i++; 
}
?> 


