<?php

    class Conexao{

        private $host = 'localhost';
        private $dbname = 'Teste';
        private $user = 'root';
        private $pass = '';

        public function conectar(){

            try {
                    $conexao = new PDO("mysql:host = $this->host;
                                    dbname = $this->dbname",
                                    "$this->user",
                                    "$this->pass"
                                    );
                    } catch(PDOException $e){
                    echo 'Erro: '.$e->getMessage();
                }

        }

    }

    $bd = new Conexao();
    $bd->conectar();
    
?>