<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 04/04/2017
 * Time: 10:35
 */


 require_once './banco/BancoPDO.php';
require_once'./classes/mercado.php';

 class MercadoDAO{

     public static $conexao = null;

     public function __construct(){


 }

     //metodo de inserção
     public function inserir(Mercado $mercado){

         try{
             print_r($mercado);
             $conexao = new BancoPDO();
             $conexao = $conexao->conexao();

             $sql= "INSERT INTO tbmercado(questCandidato, abordagem)VALUES(:questCandidato, :abordagem)";
             if($stm = $conexao->prepare($sql)){
                $stm->bindValue(':questCandidato',$mercado->getQuestCandidato());
                 $stm->bindValue(':abordagem', $mercado->getAbordagem());
                 $stm->execute();
                 return true;
                // print_r($stm);
             }else{
                 return false;
             }

         }catch (Exception $ex){
             echo 'Erro: ' . $ex->getMessage();
         }

     }
     public function excluirMercado(Mercado $mercado){
         try{
             $sql = "DELETE FROM tbmercado WHERE id = :id;";

             $con = new BancoPDO();
             $con = $con->conexao();

             if($stm = $con->prepare($sql)){
                 $stm->bindValue(":id", $mercado->getId());
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

     public function listarMercado() {
         try {
             $sql = "SELECT * FROM tbmercado;";

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

 }



?>