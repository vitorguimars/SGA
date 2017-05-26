<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 08/05/2017
 * Time: 19:22
 */

require_once 'banco/BancoPDO.php';
require_once './classes/ramal.php';

class ramalDAO
{


    public static $conexao = null;

    public function __construct()
    {

    }

    //metodo de inserção
    public function inserir(Ramal $ramal)
    {
        try {
            $conexao = new BancoPDO();
            $conexao = $conexao->conexao();

            $sql = "INSERT INTO tbramais(nome, setor, ramal)VALUES(:nome, :setor, :ramal)";
            if ($stm = $conexao->prepare($sql)) {
                $stm->bindValue(":nome", $ramal->getNome());
                $stm->bindValue(":setor", $ramal->getSetor());
                $stm->bindValue(":ramal", $ramal->getRamal());
                $stm->execute();
                return true;
            } else {
                return false;
            }

        } catch (Exception $ex) {
            echo 'Erro:  ' . $ex->getMessage();

        }

    }

    public function listarRamais() {
        try {
            $sql = "SELECT * FROM tbramais ORDER BY nome;";

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

    public function excluirRamal(Ramal $ramal){
        try{
            $sql = "DELETE FROM tbramais WHERE id = :id;";

            $con = new BancoPDO();
            $con = $con->conexao();

            if($stm = $con->prepare($sql)){
                $stm->bindValue(":id", $ramal->getIdRamal());
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



}

?>