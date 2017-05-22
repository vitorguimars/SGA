<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 18/05/2017
 * Time: 20:03
 */
require_once './banco/BancoPDO.php';
require_once'./classes/curso.php';
require_once'./classes/categoria.php';
require_once'./classes/concorrente.php';
class ConcorrenteDAO{

    public static $conexao = null;

    public function __construct(){

    }

    // metodo de inserção
    public function inserir(Concorrente $concorrente){
try{
    $conexao = new BancoPDO();
    $conexao = $conexao->conexao();

    $sql = "INSERT INTO tbconcorrentes(fk_tbcategorias_id,fk_tbcursos_id,empresa,site,produto,impacto,observacao)VALUES(:categoria,:curso,:nomeEmpresa,:site,:produto,:impacto,:observacao)";
    if($stm = $conexao->prepare($sql)){
        $stm->bindValue(":categoria",$concorrente->getCategoria());
        $stm->bindValue(":curso",$concorrente->getCurso());
        $stm->bindValue(":nomeEmpresa",$concorrente->getNomeEmpresa());
        $stm->bindValue(":site",$concorrente->getSite());
        $stm->bindValue(":produto",$concorrente->getProduto());
        $stm->bindValue(":impacto",$concorrente->getImpacto());
        $stm->bindValue(":observacao",$concorrente->getObservacao());
        $stm->execute();
        return true;

    }else{
        return false;
    }

}catch (Exception $ex){
    echo 'Erro: '.$ex->getMessage();

}

    }

    public function comboCategoria(){
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

        }catch (Exception $ex){
            echo 'Erro' .$ex->getMessage();
        }
    }


    public function comboCurso(){
        try{
            $sql = "SELECT * FROM tbcursos";

            $con = new BancoPDO();
            $con = $con->conexao();

            if ($stm = $con->prepare($sql)){
                $stm->execute();
                $con = null;
                $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);


                $i = 1;
                foreach($resultado as $dados){
                    $nomeCurso = $dados["nomecurso"];

                    echo "<option value='$i'>".$nomeCurso."</option>";
                    $i++;
                }

                // return $this->populaCasos($stm->fetch(PDO::FETCH_OBJ));
            }
            return null;


        }catch (Exception $ex){
            echo 'Erro:' .$ex->getMessage();
        }
    }

}

?>