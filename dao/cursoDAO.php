<?php

require_once '../banco/BancoPDO.php';

class cursoDAO extends BancoPDO{
    
    function __construct() {
        $this->conexao = BancoPDO::conexao();
    }
    
    //metod de inserção
    public function inserir($curso){
        try{
            $stm = $this->conexao->prepare("INSERT INTO tbcurso(idcurso, nomecurso, tipocurso, valorparametro)VALUE(?,?,?,?)");
            echo $curso->nomecurso;
            
            $stm->bindValue(1,$curso->idcurso);
            $stm->bidValue(2,$curso->nomecurso);
            $stm->bindValue(3,$curso->tipocurso);
            $stm->bindValue(4,$curso->valorparametro);
            
            if($stm->execute()){
                echo 'Dados inseridos com sucesso!';
            }
        } catch (Exception $ex) {
            echo 'Erro: '.$ex->getMessage();

        }
        
    }
    
    public function visualizar($idcurso = "", $combo=""){
        try{
        if($idsolicitante ==""){
            $stm = $this->conexao->prepare("SELECT * FROM tbcurso");
            
    }else{
        $stm = $this->conexao->prepare("SELECT * FROM tbcurso WHERE idcurso = ?");
        $stm->bindParam(1, $idsolicitante, PDO::PARAM_INT);
        
    }
    if($stm->execute()){
        if($combo == ""){
            $tabela = "<table><tr>"
                            ."<td>CODIGO</td>"
                            ."<td>NOME CURSO</td>"
                            ."<td>CATEGORIA</td>"
                            ."<td>VALOR PARÂMTETRO</td>"
                            ."</tr>";
            
                    while ($dados = $stm->fetch(PDO::FETCH_OBJ)){
                        $tabela .="<tr>"
                                 ."<td>".$dados->idcurso."</td>"
                                 ."<td>".$dados->nomecurso."</td>"
                                 ."<td>".$dados->tipocurso."</td>"
                                 ."<td>".$dados->valorparametro."<\td>"
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

