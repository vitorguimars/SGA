<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 04/04/2017
 * Time: 01:53
 */

if ($_POST["creditoTxt"]!= ""){

    require_once "banco/BancoPDO.php";
    require_once "classes/credito.php";
    require_once "dao/creditoDAO.php";



    $credito = $_POST["creditoTxt"];
    $objetoCredito = new Credito();
    $creditoDao = new creditoDAO();

    $objetoCredito->setNumCredito($credito);
    //print_r($objetoCredito);

    if($creditoDao->inserir($objetoCredito)== true){
        echo  $objetoCredito->getNumCredito(). " créditos cadastrado com sucesso!";
       header("location:principal.php?credito=true");
    }else{
        header("location:principal.php?credito=false");
    }

    // header("refresh:3;url=principal.php");

}