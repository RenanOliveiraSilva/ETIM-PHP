<?php 
    require_once "cadastro.php";
    $cadastro = new Cadastro(0, null, null);
    $cadastro = [];

    $cadastro = new Cadastro(
        @$_REQUEST['id'],
        @$_REQUEST['nome'],
        @$_REQUEST['idade']
    );

    $cadastro = Cadastro::inserir();


?>