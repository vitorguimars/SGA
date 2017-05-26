<?php

require_once './banco/BancoPDO.php';
require_once'./classes/curso.php';
require_once'./classes/categoria.php';

class CursoDAO{

    public static $conexao = null;
    
    function __construct() {

    }
    
    //metod de inserção
    public function inserir(Curso $curso){
        try {
            $conexao = new BancoPDO();
            $conexao = $conexao->conexao();
            $sql = "INSERT INTO tbcursos(nomecurso,fk_tbcategoria_id)VALUES(:nomecurso,:categoria)";
            if ($stm = $conexao->prepare($sql)) {
                $stm->bindValue(":nomecurso", $curso->getNomeCurso());
                $stm->bindValue("categoria", $curso->getCategoria());
                $stm->execute();

                return true;
            } else {
                return false;
            }

        } catch (Exception $ex) {
            echo 'Erro: '.$ex->getMessage();

        }
        print_r($curso);
    }
    public function excluirCurso(Curso $curso){
        try{
            $sql = "DELETE FROM tbcursos WHERE idcurso = :id";

            $conexao = new BancoPDO();
            $conexao = $conexao->conexao();

            if($stm = $conexao->prepare($sql)){
                $stm->bindValue(":id", $curso->getIdCurso());
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

    public function listaCursos() {
        try {
            $sql = "SELECT idcurso, nomecurso, nomecategoria FROM `tbcategorias`, `tbcursos` WHERE tbcursos.fk_tbcategoria_id = tbcategorias.id";

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


    public function visualizar(){
        try{
            $sql = "SELECT * FROM tbcategorias";

            $con = new BancoPDO();
            $con = $con->conexao();

            if ($stm = $con->prepare($sql)){
                $stm->execute();
                $con = null;
                $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);


                $i = 1;
                foreach($resultado as $dados){
                    $nomeCategoria = $dados["nomecategoria"];

                    echo "<option value='$i'>".$nomeCategoria."</option>";
                    $i++;
                }

                // return $this->populaCasos($stm->fetch(PDO::FETCH_OBJ));
            }
            return null;
    
    }catch(PDOException $ex){
            echo "MENSAGEM DE ERRO<br/> Código: " . $ex->getMessage();
    }
        
    } 

}

?>

