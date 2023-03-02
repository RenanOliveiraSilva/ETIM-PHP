<!DOCTYPE html>
<html>

 <head>
 </head>

 <body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Nome: <input type="text" name="fname"><br>
   Idade: <input type="text" name="fidade">
   <input type = "submit">
  </form> 
  <hr>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
     $name = htmlspecialchars($_REQUEST["fname"]);
     $idade = htmlspecialchars($_REQUEST["fidade"]);
     
     if (empty($name)){
      echo 'O nome está em branco!!';
     } else {
       echo 'Olá '.$name;  
     }
     echo '<br>';
     if (empty($idade)){
         echo 'O campo idade está vazio!!';
     } else {
         echo $idade.' anos';
     }
 }
 ?>
 </body>
</html>