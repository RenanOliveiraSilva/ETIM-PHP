&copy; 2010 - <?php echo date('y') . '<br>'; 
//Maneiras de mostrar a data
echo 'Hoje é ' . date('d/m/y'). '<br>';
echo 'Hoje é ' . date('d-m-y'). '<br>';
echo 'Hoje é ' . date('d.m.y'). '<br>';
echo '<hr>';

//Maneiras de mostrar as horas, o horário é o do servidor
date_default_timezone_set('America/Sao_Paulo');
echo 'A Hora é ' . date('h:i:sa')  . '<br>';
echo '<hr>';

//aaaaaa
$d=strtotime('tomorrow');
echo date('m/d/y h:i:sa', $d) . '<br>';

$d=strtotime('next saturday');
echo date('m/d/y h:i:sa', $d) . '<br>';

$d=strtotime('+3 months');
echo date('m/d/y h:i:sa', $d) . '<br>';
echo '<hr>';

/*//bbbbbbbb

$datainicial = strtotime('Saturday');
$datafinal = strtotime('+6 weeks', $datainicial);

while ($datainicial <$datafinal){
echo date('')

}*/

//cccccccccccccccccc
$d1=strtotime('July 2');
$d2=ceil(($d1-time()/60/60/24));
echo 'Faltam ' .$d2. 'dias até dois de Julho!!'; 









?>