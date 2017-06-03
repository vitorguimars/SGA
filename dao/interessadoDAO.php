<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 09/05/2017
 * Time: 20:26
 */

require_once './banco/BancoPDO.php';
require_once'./classes/interessado.php';
require_once'./classes/curso.php';


class InteressadoDAO{

    public static $conexao = null;

    public function __Construct(){

    }

    //metodo de inserção
    public function inserir(Interessado $interessado){
        try{
            $conexao = new BancoPDO();
            $conexao = $conexao->conexao();
            $sql = "INSERT INTO tbinteressados(nome,telefone,email,fk_tbcursos_id, observacao)VALUES(:nome, :telefone, :email, :interesse, :observacao)";
            if($stm = $conexao->prepare($sql)){
                $stm->bindValue(":nome", $interessado->getNomeInteressado());
                $stm->bindValue(":telefone", $interessado->getTelefone());
                $stm->bindValue(":email" , $interessado->getEmail());
                $stm->bindValue(":interesse" , $interessado->getInteresse());
                $stm->bindValue(":observacao" , $interessado->getObservacao());
                $stm->execute();
                return true;
            }else{
                return false;
            }

        }catch (Exception $ex){
            echo 'Erro:' .$ex->getMessage();
        }

    }

    public function listarInteressados() {
        try {
            $sql = "SELECT id, nome,telefone, email, nomecurso, observacao FROM `tbinteressados`, `tbcursos` WHERE tbinteressados.fk_tbcursos_id = tbcursos.idcurso";

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

    public function excluirInteressado(Interessado $interessado){
        try{
            $sql = "DELETE FROM tbinteressados WHERE id = :id;";

            $con = new BancoPDO();
            $con = $con->conexao();

            if($stm = $con->prepare($sql)){
                $stm->bindValue(":id", $interessado->getIdInteressado());
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

    public function editarInteressado(Interessado $interessado){

        try{

            $sql = "UPDATE tbinteressados, tbcursos SET nome = :nome, telefone = :telefone, email = :email, fk_tbcursos_id = :idcurso, observacao = :observ WHERE tbinteressados.id = :id";

            $con = new BancoPDO();
            $con = $con->conexao();

            if($stm = $con->prepare($sql)){
                $stm->bindValue(":id", $interessado->getIdInteressado());
                $stm->bindValue(":nome", $interessado->getNomeInteressado());
                $stm->bindValue(":telefone", $interessado->getTelefone());
                $stm->bindValue(":email", $interessado->getEmail());
                $stm->bindValue(":idcurso", $interessado->getInteresse());
                $stm->bindValue(":observ", $interessado->getObservacao());
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

    public function visualizar() {
        try {
            $sql = "SELECT * FROM tbcursos;";

            $con = new BancoPDO();
            $con = $con->conexao();

            if ($stm = $con->prepare($sql)) {



                $stm->execute();
                $con = null;
                $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);


                $i = 1;
                foreach($resultado as $dados){
                    $nomeinteressado = $dados["nomecurso"];
                    //echo $nomecaso;
                    echo "<option value='$i'>".$nomeinteressado."</option>";
                    $i++;
                }

                 return $resultado;
            }
            return null;
        } catch (Exception $e) {
            echo "MENSAGEM DE ERRO<br/> Código: " . $e->getMessage();
        }
    }

    private function populaCurso($row) {
        $curso= new curso();

        $curso->setIdCurso($row->idcurso);
        $curso->setNomeCurso($row->nomecurso);
        return $curso;
    }

    public function visualizarSemEco() {
        try {
            $sql = "SELECT * FROM tbcursos;";

            $con = new BancoPDO();
            $con = $con->conexao();

            if ($stm = $con->prepare($sql)) {



                $stm->execute();
                $con = null;
                $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);

                return $resultado;
            }
            return null;
        } catch (Exception $e) {
            echo "MENSAGEM DE ERRO<br/> Código: " . $e->getMessage();
        }
    }
}

?>