<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 13/04/2017
 * Time: 19:00
 */


if ($_POST["questTxt"]!="" && $_POST["abordagemTxt"]!=""){

    require_once "banco/BancoPDO.php";
    require_once "classes/mercado.php";
    require_once "dao/mercadoDAO.php";


    $quest = $_POST["questTxt"];
    $abordagem = $_POST["abordagemTxt"];

    $objetoMercado = new Mercado();
    $mercadoDao = new MercadoDAO();
   $objetoMercado->setQuestCandidato($quest);
   $objetoMercado->setAbordagem($abordagem);

    if($mercadoDao->inserir($objetoMercado)== true){
        header("location:principal.php?mercado=true");
    }else{
        header("location:principal.php?mercado=false");
    }

}
?>