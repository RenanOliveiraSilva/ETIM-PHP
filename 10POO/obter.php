    public static function consulta(){

        $empresas = Empresa::listar();
        $nomesf = [];
        $idn = [];
        foreach($empresas as $empresa) {
            array_push($idn, $empresa->__get('id'));
            array_push($nomesf, $empresa->__get('nome'));
        } 

        $i = 0;
        $p = 1;

        $posi = count($nomesf);
        $qid = count($idn);
        $valor = @$_REQUEST['fnome'];

            do {
                if($nomesf[$i] == $valor){
                $numid = $i + 1;
                $val = 1;
                }

                $i++;
                $p++;

            } while ($p<=$posi);

        if (isset($numid)) {

            $con = (new Conexao())->conectar();

            //echo $numid;
            $sql = "select * from empresa where id =".$numid;
            $st = $con->prepare($sql);

            $st->execute();

            $valores = $st->fetchAll();
            $return = [];
            foreach($valores as $index) {
                array_push($return,
                    new Empresa($index["id"],
                                $index["nome"], 
                                $index["profissao"],
                                $index["salario"]));
                
            }
            return $return;

        } else {
            ?>
            <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="hidden" name="po" value="f">
            </form>
            <?php
            $po = @$_REQUEST['po'];
            ?> 
            <script>
                alert("Nome ainda não cadastrado");
            </script>
            <?php
        }

    }