<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 26/05/2017
 * Time: 19:05
 */

require_once "./dao/interessadoDAO.php";
require_once "./classes/interessado.php";

if($_GET["id"] != null && $_GET["id"] != ""){
    $interessadoDao = new InteressadoDAO();

    $interessado = new Interessado();
    $interessado->setIdInteressado($_GET["id"]);

    if($interessadoDao->excluirInteressado($interessado) == true){
        header("location:listarInteressados.php?excluido=true");
    }
    else{
        header("location:listarInteressados.php?excluido=false");
    }
}
?>