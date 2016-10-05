<?php

require_once '../banco/BancoPDO.php';

//estabelecimento da herança
class casoDAO extends BancoPDO{
    
    public function __construct() {
        $this->conexao = BancoPDO::conexao();
        
    }
    
    //metodo de inserção
    public function inserir($caso){
        try{
            $stm = $this->conexao->prepare("INSERT INTO tbcasos(nomecaso)VALUE(?)");
            echo $caso->nomeCaso;
            
            $stm->bindValue(1,$caso->nomeCaso);
            
            if($stm->execute()){
                echo 'Dados inseridos com sucesso!';
            }
        } catch (Exception $ex) {
            echo 'Erro: '.$ex->getMessage();

        }
        
    }
    
    public function visualizar($caso, $combo, $filtro){
        try{
        if($filtro !=""){
            $stm = $this->conexao->prepare("SELECT * FROM tbcasos WHERE idcaso = ?");
            $stm->bindParam(1,$filtro, PDO::PARAM_INT);
    }else{
        $stm = $this->conexao->prepare("SELECT * FROM tbcasos");
        
    }
    if($stm->execute()){
        if($combo == ""){
            $tabela = "<table><tr>"
                            ."<td>CODIGO</td>"
                            ."<td>CASO</td>"
                            ."</tr>";
            
                    while ($dados = $stm->fetch(PDO::FETCH_OBJ)){
                        $tabela .="<tr>"
                                 ."<td>".$dados->idCaso."</td>"
                                 ."<td>".$dados->nomeCaso."</td>"
                                 ."</tr>";
                    }
                    $tabela .="<\table>";
                    echo $tabela;
        }
        
    }
    
    }catch(PDOException $ex){
        echo 'Erro: '.$ex->getMessage();
    }
        
    } 
}
?>

    
    



