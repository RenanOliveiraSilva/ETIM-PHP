<!DOCTYPE html>
<html>

 <head>

  <style>

    if {color: blue;}
    input { width: 40%;}

  </style>


 </head>

 <body>
 
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
   Nome:  <input type="text" name="fname"> <br>
   Idade: <input type="text" name="fidade"> <br>
   Email: <input type="text" name="femail"> <br>
   Telefone: <input type="text" name="ftelefone"><br>
  <input type="submit"> 
  <hr>

  <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_REQUEST["fname"]);
    $idade = htmlspecialchars($_REQUEST["fidade"]);
    $email = htmlspecialchars($_REQUEST["femail"]);
    $telefone = htmlspecialchars($_REQUEST["ftelefone"]);

    if (empty($name)){
     echo 'O campo <b>nome</b> está vazio!!';   
    } else {
      echo 'Olá '.$name;
     }echo '<br>';
    
    if (empty($idade)){
     echo 'O campo <b>idade</b> está vazio!!';   
    } else {
       echo $idade.' anos';
     }echo '<br>'; 
    
     if (empty($email)){
      echo 'O campo <b>email</b> está vazio!!';   
     } else {
        echo 'Seu email é '.$email;
      }echo '<br>';

    if (empty($telefone)){
     echo 'O campo <b>telefone</b> está vazio!!';   
     } else {
        echo 'Seu telefone é '.$telefone;
       }echo '<br>';
   }

  ?>
 </body>
</html>