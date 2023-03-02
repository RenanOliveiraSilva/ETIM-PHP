<html>
    <head>

        <style>
        
            div { text-align :center; }
    

        </style>

    </head>
    
    <body>
        
        <div class = 'menu'>
                
            <?php require 'menu.php'; ?>
             
            <h1> Bem vindo a minha página! </h1>
            <p> Etec Pedro Badran</p>
            <p> Ensino Técnico de Qualidade </p>


            <?php include 'rodape.php';
            
                /*O include e Require são bem parecidos, exceto na questão de erros,
                na qual o include apenas mostra um aviso (Warning) e cotinua o código,
                já no require esse mesmo erro ocasiona um fatal error que interrompe o código.*/

            ?>

            <?php require 'vars.php';
                
                echo '<hr>';
                echo 'Eu '.$aluno. ' estou cursando '.$curso.' na escola '.$escola.
                ' com os professores ' .$profA. ' e ' .$profB. '!';
                
            ?>

    </body>

</html>