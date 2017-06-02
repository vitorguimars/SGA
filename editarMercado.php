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
    $mercado->setQuestCandidato(strtoupper($_POST["questTxt"]));
    $mercado->setAbordagem(strtoupper($_POST["abordagemTxt"]));

    //$texto= strtoupper($_POST['texto']);
    //print_r($caso);

    if($mercadoDao->editarMercado($mercado) == true){
        header("location:listaMercados.php?editado=true");
    }
    else{
        header("location:listaMercados.php?editado=false");
    }

}

?>