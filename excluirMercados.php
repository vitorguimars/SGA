<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 23/05/2017
 * Time: 20:27
 */

require_once "./dao/mercadoDAO.php";
require_once "./classes/mercado.php";

if($_GET["id"] != null && $_GET["id"] != ""){
    $mercadoDAO = new MercadoDAO();

    $mercado = new Mercado();
    $mercado->setId($_GET["id"]);

    if($mercadoDAO->excluirMercado($mercado) == true){
        header("location:listaMercados.php?excluido=true");
    }
    else{
        header("location:listaMercados.php?excluido=false");
    }
}
?>