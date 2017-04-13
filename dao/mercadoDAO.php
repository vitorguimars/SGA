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

     //metodo de inserчуo
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

 }



?>