<?php
$nome = ['Andre','Ricardo','Wesley','João'];
$nome[] = 'Luiza'; /*Acrescentar dados no array*/

echo'<pre>';
var_dump($nome);    /*Para ver bugs*/
echo'</pre>';
echo'<hr>' ;       
 
foreach($nome as $indice => $valor){
	echo $nome[$indice].'<br>';
	
 }              /*Usado para mostrar os valores*/
 echo '<hr>'; 

$dados = ['nome'=>'Andre', 'Telefone'=>16666666];

echo'<pre>';
print_r($dados);    /*Array associativo*/
echo'</pre>';
echo'<hr>' ; 
?>