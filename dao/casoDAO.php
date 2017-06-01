<?php

require_once './banco/BancoPDO.php';
require_once './classes/caso.php';

//estabelecimento da herança
class casoDAO{
    
    public static $conexao = null;

    public function __construct() {
       
    }

    //metodo de inserção
    public function inserir(Caso $caso) {
        try {

            $conexao = new BancoPDO();
            $conexao= $conexao->conexao();

            $sql = "INSERT INTO tbcasos(nomecaso)VALUE(:caso)";

            if($stm = $conexao->prepare($sql)){
                $stm->bindValue(":caso",$caso->getNomeCaso());
                $stm->execute();
                print_r($stm);
                return true;

            }else{
                return false;
            }
        } catch (Exception $ex) {
            echo 'Erro: ' . $ex->getMessage();
        }
    }

    public function listarCasos() {
        try {
            $sql = "SELECT * FROM tbcasos;";

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

    public function excluirCaso(Caso $caso){
        try{
            $sql = "DELETE FROM tbcasos WHERE id = :id;";

            $con = new BancoPDO();
            $con = $con->conexao();

            if($stm = $con->prepare($sql)){
                $stm->bindValue(":id", $caso->getIdCaso());
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

    public function visualizar() {
    try {
        $sql = "SELECT * FROM tbcasos;";

        $con = new BancoPDO();
        $con = $con->conexao();

        if ($stm = $con->prepare($sql)) {



            $stm->execute();
            $con = null;
            $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);
            // print_r($resultado);
            echo "<select class='form-control' id='caso'>";
            $i = 1;
            foreach($resultado as $dados){
                $nomecaso = $dados["nomecaso"];
                //echo $nomecaso;
                echo "<option value='$i'>".$nomecaso."</option>";
                $i++;
            }
            echo "</select>";
            // return $this->populaCasos($stm->fetch(PDO::FETCH_OBJ));
        }
        return null;
    } catch (Exception $e) {
        echo "MENSAGEM DE ERRO<br/> Código: " . $e->getMessage();
    }
}




    private function populaCasos($row) {
        $caso = new Caso();

        $caso->setIdCaso($row->idCaso);
        $caso->setNomeCaso($row->nomeCaso);
        return $caso;
    }

    public function editarCaso(Caso $caso){

        try{

            $sql = "UPDATE tbcasos SET nomecaso = :nome WHERE id = :idcaso";

            $con = new BancoPDO();
            $con = $con->conexao();

            if($stm = $con->prepare($sql)){
                $stm->bindValue(":idcaso", $caso->getIdCaso());
                $stm->bindValue(":nome", $caso->getNomeCaso());
                $stm->execute();
                return true;
            }
            else{
                return false;
            }


        }catch (Exception $ex){
            echo 'Erro: ' .$ex->getMessage();
        }

    }


}
?>






