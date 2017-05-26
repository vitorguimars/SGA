<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 25/05/2017
 * Time: 20:05
 */

require_once "./dao/ramalDAO.php";
require_once "./classes/ramal.php";

if($_GET["id"] != null && $_GET["id"] != ""){
    $ramalDao = new ramalDAO();

    $ramal = new Ramal();
    $ramal->setIdRamal($_GET["id"]);

    if($ramalDao->excluirRamal($ramal) == true){
        header("location:principal.php?excluido=true");
    }
    else{
        header("location:principal.php?excluido=false");
    }
}
?>