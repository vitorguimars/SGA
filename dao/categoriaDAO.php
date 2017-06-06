<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 10/11/2016
 * Time: 12:47
 */

require_once './banco/BancoPDO.php';
require_once './classes/categoria.php';

class CategoriaDAO{

    public static $conexao = null;



    public function __construct(){

    }

    //metodo inserção
    public function inserir(Categoria $categoria){

        try{
          //  print_r($categoria);
          $conexao = new BancoPDO();
            $conexao = $conexao->conexao();
            $sql = "INSERT INTO tbcategorias (nomecategoria,valorparametro)VALUES(:nomeCateg,:valorParam)";
            if($stm = $conexao->prepare($sql)){
                $stm->bindValue(":nomeCateg",$categoria->getNomeCategoria());
                $stm->bindValue(":valorParam",$categoria->getValorParametro());
                $stm->execute();
                return true;
            }else{
                return false;
            }
        }catch (Exception $ex){
            echo 'Errro:' . $ex->getMessage();
        }
}

    public function excluirCategoria(Categoria $categoria){
        try{
            $sql = "DELETE FROM tbcategorias WHERE id = :id;";

            $con = new BancoPDO();
            $con = $con->conexao();

            if($stm = $con->prepare($sql)){
                $stm->bindValue(":id", $categoria->getIdCategoria());
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

    public function editarCategoria(Categoria $categoria){

        try{

            $sql = "UPDATE tbcategorias SET nomecategoria = :nome , valorparametro = :valor WHERE id = :idcategoria";

            $con = new BancoPDO();
            $con = $con->conexao();

            if($stm = $con->prepare($sql)){
                $stm->bindValue(":idcategoria", $categoria->getIdCategoria());
                $stm->bindValue(":nome", $categoria->getNomeCategoria());
                $stm->bindValue(":valor", $categoria->getValorParametro());
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

    public function listarCategorias() {
        try {
            $sql = "SELECT * FROM tbcategorias;";

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
            if($stm = $con->prepare($sql)){
                $stm->execute();
                $con = null;
                $resultado = $stm->fetchAll(PDO::FETCH_ASSOC);
                echo print_r($resultado);
            }

        }catch (Exception $ex){
            echo "Erro: " .$ex->getMessage();
        }
    }

    public function vSemestral_20(){
        try{
            $sql = "SELECT valorparametro FROM tbcategorias WHERE nomecategoria = 'GRADUAÇÃO'";

            $con = new BancoPDO();
            $con = $con->conexao();
            if($stm = $con->prepare($sql)){
                $stm->execute();
                $con = null;
                ($linha = $resultado = $stm->fetch(PDO::FETCH_ASSOC));
                echo "R$: {$linha['valorparametro']}";


                // print_r($resultado);


            }

        }catch (Exception $ex){
            echo "Erro: " .$ex->getMessage();

        }
    }

    public function vMensal_20(){
        try{
            $sql = "SELECT valorparametro FROM tbcategorias WHERE nomecategoria = 'GRADUAÇÃO'";

            $con = new BancoPDO();
            $con = $con->conexao();
            if($stm = $con->prepare($sql)) {
                $stm->execute();
                $con = null;
                ($linha = $resultado = $stm->fetch(PDO::FETCH_ASSOC));
                echo "R$: ".number_format($linha['valorparametro']/6, 2,'.','') ;
            }
        }catch (Exception $ex){
            echo "Erro: " .$ex->getMessage();
        }

    }

    public function vSemestral(){
        try{
            $sql = "SELECT valorparametro FROM tbcategorias WHERE nomecategoria = 'GRADUAÇÃO'";

            $con = new BancoPDO();
            $con = $con->conexao();
            if($stm = $con->prepare($sql)) {
                $stm->execute();
                $con = null;
                ($linha = $resultado = $stm->fetch(PDO::FETCH_ASSOC));
                echo "R$: ".number_format($linha['valorparametro']/20, 2,'.','') ;
            }
        }catch (Exception $ex){
            echo "Erro: " .$ex->getMessage();
        }

    }

    public function vMensal(){
        try{
            $sql = "SELECT valorparametro FROM tbcategorias WHERE nomecategoria = 'GRADUAÇÃO'";

            $con = new BancoPDO();
            $con = $con->conexao();
            if($stm = $con->prepare($sql)) {
                $stm->execute();
                $con = null;
                ($linha = $resultado = $stm->fetch(PDO::FETCH_ASSOC));
                echo "R$: ".number_format($linha['valorparametro']/(20*6), 2,'.','') ;
                return number_format($linha['valorparametro']/(20*6), 2,'.','');
            }
        }catch (Exception $ex){
            echo "Erro: " .$ex->getMessage();
        }

    }

    public function getVMensal(){
        try{
            $sql = "SELECT valorparametro FROM tbcategorias WHERE nomecategoria = 'GRADUAÇÃO'";

            $con = new BancoPDO();
            $con = $con->conexao();
            if($stm = $con->prepare($sql)) {
                $stm->execute();
                $con = null;
                ($linha = $resultado = $stm->fetch(PDO::FETCH_ASSOC));
                return number_format($linha['valorparametro']/(20*6), 2,'.','');
            }
        }catch (Exception $ex){
            echo "Erro: " .$ex->getMessage();
        }

    }



}