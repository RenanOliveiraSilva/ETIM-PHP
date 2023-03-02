<?php

$somaM = 0;
$media = ['10','20','30','40','50','60','70','80','90','100'];

 foreach ($media as $indice => $valor){
  $somaM += $media[$indice];
  
	
 }
  echo 'Calcular média de 10 números digitados pelo o usuário:<br>';
  $somaM /= 10;
  echo 'Média = ' .$somaM.'<br>'; 
  echo '<hr>';
?>