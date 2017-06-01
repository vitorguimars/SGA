<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 01/06/2017
 * Time: 19:55
 */

require_once "./dao/creditoDAO.php";
require_once "./classes/credito.php";

if($_POST["id"] != null && $_POST["id"] != "" && $_POST["creditoTxt"]!=null && $_POST["creditoTxt"]!=""){
    $creditoDao = new CreditoDAO();

    $credito = new Credito();
    $credito->setIdCredito($_POST["id"]);
    $credito->setNumCredito($_POST["creditoTxt"]);


   // print_r($caso);

    if($creditoDao->editarCredito($credito) == true){
        header("location:listarCreditos.php?editado=true");
    }
    else{
        header("location:listarCreditos.php?editado=false");
    }

}

?>