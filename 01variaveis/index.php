<!DOCTYPE html>
<html>
 <head>
  <style>
   h1 {text-align: center; color: MediumSeaGreen;}
   echo {text-align: center;}
   hr {border: 5px solid green; border-radius: 5px;
  </style> 
 </head>
 <body>
 </body> 
</html> 

  <?php
   $nome = 'Renan';
   $endereco = 'Av. Marquês De olinda'; 
   $cpf = '123.321.123/00';
   $telefone = '99999-8888';
   $email = 'Renandeoliveirasilva123@gmail.com';
   $ensino = 'Cursando 2°ano do ensino médio';
   $curso = 'Desenvolvimento de Sistemas';
   $cidade = 'Ipuã';
   $estado = 'São Paulo';

   echo '<h1>Currículo</h1>';
   echo '<hr>';
   echo '<h3>Dados pessoais</h3>';
   echo 'Nome :' .$nome.'&nbsp;&nbsp;&nbsp;&nbsp';
   echo 'CPF :' .$cpf. '<br>';
   echo 'Telefone :' .$telefone. '&nbsp;&nbsp;&nbsp;&nbsp';
   echo 'Email :' .$email.'<br>';
   echo 'Cidade :' .$cidade.'<br>';
   echo 'Estado :' .$estado.'<br>';
   echo '<br>';
   echo '<hr>';
   
   echo '<h3>Aptidão</h3>';
   echo 'Ensino :' .$ensino. '&nbsp;&nbsp;&nbsp;&nbsp';
   echo 'Curso :' .$curso. '';
   echo '<hr>';
?>
</html>