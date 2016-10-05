<?php

require_once '../banco/BancoPDO.php';

class creditoDAO extends BancoPDO{
    function __construct() {
        $this->conexao = BancoPDO::conexao();   
    }
    
    //Metodo inserir
    
    public function inserir($credito){
        try{
            $stm = $this->conexao->prepare("INSERT INTO tbcreditos(idcredito, numcredito, desconto)VALUE(?,?,?)");
            echo $credito->numcredito;
            
            $stm->bindValue(1,$credito->idcredito);
            $stm->bindValue(2,$credito->numcredito);
            $stm->bindValue(3,$credito->desconto);
            
            if($stm->execute()){
                echo "Dados inseridos com sucesso! <br>";
            }

        } catch (Exception $ex) {
            echo "Erro: ".$ex->getMessage();

        }
        
        function visualisar($idCredito = "", $combo = ""){
            try{
                if($idCredito == ""){
                    $stm =  $this->conexao->prepare("SELECT * FROM tbcreditos WHERE idcredito = ?");
                    $stm->bindParam(1,$idcredito, PDO::PARAM_INT);
                }else{
                    $stm =  $this->conexao->prepare("SELECT * FROM tbcreditos");
                }
                if($stm->execute()){
                    if(combo ==""){
                        $tabela = "<table><tr>"
                                ."<td>CÓDIGO</td>"
                                ."td>NÚMERO DE CRÉDITOS</td>"
                                ."<td>DESCONTO %</td>"
                                ."</tr>";
                        
                        while ($dados = $stm->fetch(PDO::FETCH_OBJ)){
                            $tabela .="<tr>"
                                    ."<td>".$dados->idcredito."</td>"
                                    ."<td>".$dados->numcredito."</td>"
                                    ."<td>".$dados->desconto."</td>"
                                    ."</tr>";
                        }
                        $tabela .="<\table>";
                       echo $tabela;
                    }
                }
            } catch (Exception $ex) {
                echo "Erro: ".$ex->getMessage();

            }
        }
    
        
    }

    
}


?>

