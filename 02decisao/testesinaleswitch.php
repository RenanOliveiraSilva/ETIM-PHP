<?php
echo '<br>';
//Testando o sinal

//Primeiro Exercicio

  $num = 0;
 if ($num > 0){
    echo 'Valor Positivo';
 }else if ($num < 0){
	echo 'Valor Negativo';
 }else{
	echo'Igual a zero'; 
 }
echo '<br>';
echo '<br>';
echo '<hr>';
echo '<br>';
echo '<br>';
//Segundo Exercicio

//1 adição, 2 subtração, 3 multiplicação, 4 divisão, 5 resto 

$op = 6;
$nm1 = 10;
$nm2 = 4;
 
 echo 'Cálculo com diferente operações:';
 echo '<br>';
 
 switch($op){
	
   case 1:
     $nm1 += $nm2 ;
	 echo 'Operação selecionada: Soma';
     echo '<br>';
     echo 'Resultado : '.$nm1.'';	
	 break ;
	 
	 case 2:
     $nm1 -= $nm2 ;
	 echo 'Operação selecionada: Subtração';
     echo '<br>';
     echo 'Resultado : '.$nm1.'';	
	 break ;
	 
	 case 3:
     $nm1 *= $nm2 ;
	 echo 'Operação selecionada: Multiplicação';
     echo '<br>';
     echo 'Resultado : '.$nm1.'';	
	 break ;
	 
	 case 4:
     $nm1 /= $nm2 ;
	 echo 'Operação selecionada: Divisão';
     echo '<br>';
     echo 'Resultado : '.$nm1.'';	 
	 break ;
	 
	 case 5:
     $nm1 %= $nm2 ;
	 echo 'Operação selecionada: Resto';
     echo '<br>';
     echo 'Resultado : '.$nm1.'';	
	 break ;
	 default:
	 echo 'Opção inválida';
}




?>