<?php
echo 'Digite 5 números e verifique qual é o maior.<br>';
$num = array(19,56,34,9,8);
$i = 0;
$posi = count($num);
$teste = 0;

while ($i<$posi){	
 if($teste <= $num[$i]){
	$teste = $num[$i]; 
 }	
 $i++;
}
 echo 'O maior número é: '.$teste;
echo '<hr>';

/*Peça ao usuário para digitar várias idades. exiba quantas 
pessoas são maior de idade (18 anos) e quantas são menores*/

echo 'Maior de idade <br>';
$idades = [18,16,19,21,44,33]; 
$i = 0;
$maior = 0;
$menor = 0;
$pos = count($idades);


while ($i<$pos){
 if ($idades[$i]>=18){
     $maior++;	
} else {
  $menor++;}	
  $i++;
}

echo 'A quantidade de pessoas maiores de idade é '.$maior.'<br>e de pessoas menores é '.$menor;

?>