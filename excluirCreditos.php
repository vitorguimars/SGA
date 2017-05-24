<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 23/05/2017
 * Time: 21:35
 */
require_once "./dao/creditoDAO.php";
require_once "./classes/credito.php";

if($_GET["id"] != null && $_GET["id"] != ""){
    $creditoDAO = new CreditoDAO();

    $credito = new Credito();
    $credito->setIdCredito($_GET["id"]);

    if($creditoDAO->excluirCredito($credito) == true){
        header("location:listarCreditos.php?excluido=true");
    }
    else{
        header("location:listarCreditos.php?excluido=false");
    }
}
?>