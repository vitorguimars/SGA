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

    //metodo de inserчуo
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



}

?>