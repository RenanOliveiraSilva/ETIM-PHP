<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include_once "conexao.php";

    class Cadastro{
        private $id;
        private $nome;
        private $idade;

        function __construct($id, $nome, $idade){
            $this->id = $id;
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function inserir(){
            $con = (New Conexao())->conectar();
            $sql = 'insert into revisao (nome, idade) values (:nome, :idade)';
            $st = $con->prepare($sql);

            $st->BindValue('nome', $this->nome);
            $st->BindValues('idade', $this->idade);

            $st->execute();
        }

    }


?>