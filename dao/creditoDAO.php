<?php

require_once './banco/BancoPDO.php';

class creditoDAO{
    function __construct() {

    }
    
    //Metodo inserir
    
    public function inserir($credito)
    {
        try {
            $stm = $this->conexao->prepare("INSERT INTO tbcreditos(id, numcredito, desconto)VALUE(?,?,?)");
            echo $credito->numcredito;

            $stm->bindValue(1, $credito->id);
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

