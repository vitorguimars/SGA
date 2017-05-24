<?php

require_once './banco/BancoPDO.php';
require_once './classes/credito.php';

class CreditoDAO{
    function __construct() {

    }
    
    //Metodo inserir
    
    public function inserir(Credito $credito)
    {
        try {
            $conexao = new BancoPDO();
            $conexao = $conexao->conexao();
            $sql = "INSERT INTO tbcreditos(qtdecredito)VALUE(:credito)";
            if($stm = $conexao->prepare($sql)) {
                $stm->bindValue(":credito", $credito->getNumCredito());
                $stm->execute();
                print_r($stm);
                return true;

            }else{
                return false;
            }

            } catch (Exception $ex) {
            echo "Erro: " . $ex->getMessage();

        }
    }
    public function excluirCredito(Credito $credito){
        try{
            $sql = "DELETE FROM tbcreditos WHERE id = :id;";

            $con = new BancoPDO();
            $con = $con->conexao();

            if($stm = $con->prepare($sql)){
                $stm->bindValue(":id", $credito->getIdCredito());
                $stm->execute();
                return true;
            }
            else{
                return false;
            }
        }
        catch(Exception $ex){
            echo "MENSAGEM DE ERRO<br/> Código: " . $ex->getMessage();
        }
    }

    public function listarCreditos() {
        try {
            $sql = "SELECT * FROM tbcreditos ORDER BY qtdecredito";

            $con = new BancoPDO();
            $con = $con->conexao();

            if ($stm = $con->prepare($sql)) {



                $stm->execute();
                $con = null;
                $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
                // return $this->populaCasos($stm->fetch(PDO::FETCH_OBJ));
            }
            return null;
        } catch (Exception $e) {
            echo "MENSAGEM DE ERRO<br/> Código: " . $e->getMessage();
        }
    }

        
        public function visualisar(){
            try{
                $sql = "SELECT * FROM tbcreditos ORDER BY qtdecredito";
                $con = new BancoPDO();
                $con = $con->conexao();
                if($stm = $con->prepare($sql)){
                   $stm->execute();
                   $con = null;
                   $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);
                   // print_r($resultado);
                    echo "
                        <script>
                           function changeFunc() {
                                var selectBox = document.getElementById('selectBox');
                                var selectedValue = selectBox.options[selectBox.selectedIndex].value;

                                if(selectedValue == 1){
                                    document.getElementById('valor').innerHTML = 4;
                                }
                                else if(selectedValue == 2){
                                    document.getElementById('valor').innerHTML = 8;
                                }
                                 else if(selectedValue == 3){
                                    document.getElementById('valor').innerHTML = 12;
                                }
                                 else if(selectedValue == 4){
                                    document.getElementById('valor').innerHTML = 16;
                                }
                                 else if(selectedValue == 5){
                                    document.getElementById('valor').innerHTML = 20;
                                }
                                 else if(selectedValue == 6){
                                    document.getElementById('valor').innerHTML = 24;
                                }
                                 else if(selectedValue == 7){
                                    document.getElementById('valor').innerHTML = 28;
                                }
                                 else if(selectedValue == 8){
                                    document.getElementById('valor').innerHTML = 32;
                                }

}
                        </script>

                    ";

                    echo "<select class = 'form-control' id='selectBox' onchange='changeFunc();'>";
                    $j = 1;

                    foreach($resultado as $dados){
                        $numCredito = $dados["qtdecredito"];
                        $i = 0;
                        $id = "opcao" . $i;
                        echo $numCredito;
                        echo"<option name='opcoes' value='$j'>".$numCredito ."</option>";
                        $i++;
                        $j++;
                    }
                    echo "</select>";

                    }
                return null;

            } catch (Exception $ex) {
                echo "Erro: ".$ex->getMessage();

            }
        }


    public function getCreditos(){
        try{
            $sql = "SELECT * FROM tbcreditos ORDER BY qtdecredito";
            $con = new BancoPDO();
            $con = $con->conexao();
            if($stm = $con->prepare($sql)){
                $stm->execute();
                $con = null;
                $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);
                // print_r($resultado);



                foreach($resultado as $dados){
                    $numCredito = $dados["qtdecredito"];
                    $i = 0;
                    $id = "opcao" . $i;
                    echo $numCredito;
                    $i++;
                }


            }
            return $numCredito;

        } catch (Exception $ex) {
            echo "Erro: ".$ex->getMessage();

        }
    }









    public function simular($caso, $credito){
        try{


        }catch (Exception $ex){
            echo "Erro: " .$ex->getMessage();
        }
    }

}


?>

