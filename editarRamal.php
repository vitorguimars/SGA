<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 01/06/2017
 * Time: 20:20
 */

require_once "./dao/ramalDAO.php";
require_once "./classes/ramal.php";

if($_POST["id"] != null && $_POST["id"] != "" && $_POST["nomeTxt"]!= null && $_POST["nomeTxt"]!="" && $_POST["setorTxt"]!= null && $_POST["setorTxt"]!="" && $_POST["ramalTxt"]!= null && $_POST["ramalTxt"]!=""){
    $ramalDao = new ramalDAO();

    $ramal = new Ramal();
    $ramal->setIdRamal($_POST["id"]);
    $ramal->setNome($_POST["nomeTxt"]);
    $ramal->setSetor($_POST["setorTxt"]);
    $ramal->setRamal($_POST["ramalTxt"]);


    //print_r($ramal);

    if($ramalDao->editarRamal($ramal) == true){
        header("location:principal.php?editado=true");
    }
    else{
        header("location:principal.php?editado=false");
    }

}
?>