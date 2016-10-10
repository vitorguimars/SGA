<?php

require_once './banco/BancoPDO.php';

class creditoDAO{
    function __construct() {

    }
    
    //Metodo inserir
    
    public function inserir($credito)
    {
        try {
            $stm = $this->conexao->prepare("INSERT INTO tbcreditos(idcredito, numcredito, desconto)VALUE(?,?,?)");
            echo $credito->numcredito;

            $stm->bindValue(1, $credito->idcredito);
            $stm->bindValue(2, $credito->numcredito);
            $stm->bindValue(3, $credito->desconto);

            if ($stm->execute()) {
                echo "Dados inseridos com sucesso! <br>";
            }

        } catch (Exception $ex) {
            echo "Erro: " . $ex->getMessage();

        }
    }
        
        public function visualisar(){
            try{
                $sql = "SELECT * FROM tbcreditos ORDER BY numcredito";
                $con = new BancoPDO();
                $con = $con->conexao();
                if($stm = $con->prepare($sql)){
                   $stm->execute();
                   $con = null;
                   $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);
                   // print_r($resultado);
                    echo "<select class = 'form-control'>";
                    foreach($resultado as $dados){
                        $numCredito = $dados["numCredito"];
                        echo $numCredito;
                        echo"<option value='$numCredito'>".$numCredito ."</option>";
                    }
                    echo "</select>";

                    }
                return null;

            } catch (Exception $ex) {
                echo "Erro: ".$ex->getMessage();

            }
        }
    
        


    
}


?>

