<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 01/06/2017
 * Time: 15:31
 */

require_once "./dao/mercadoDAO.php";
require_once "./classes/mercado.php";

if($_POST["id"] != null && $_POST["id"] != "" && $_POST["questTxt"]!=null && $_POST["questTxt"]!="" && $_POST["abordagemTxt"]!= null && $_POST["abordagemTxt"]!="" ){
    $mercadoDao = new MercadoDAO();

    $mercado = new Mercado();
    $mercado->setId($_POST["id"]);
    $mercado->setQuestCandidato($_POST["questTxt"]);
    $mercado->setAbordagem($_POST["abordagemTxt"]);


    //print_r($caso);

    if($mercadoDao->editarMercado($mercado) == true){
        header("location:listaMercados.php?editado=true");
    }
    else{
        header("location:listaMercados.php?editado=false");
    }

}

?>