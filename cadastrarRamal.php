<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 08/05/2017
 * Time: 19:52
 */


if($_POST["nomeTxt"] !="" && $_POST["setorTxt"] != "" && $_POST["ramalTxt"] !=""){
    require_once "banco/BancoPDO.php";
    require_once "classes/ramal.php";
    require_once "dao/ramalDAO.php";

    $nome = $_POST["nomeTxt"];
    $setor = $_POST["setorTxt"];
    $ramal = $_POST["ramalTxt"];

    $objetoRamal = new Ramal();
    $ramalDao = new ramalDAO();

    $objetoRamal->setNome($nome);
    $objetoRamal->setSetor($setor);
    $objetoRamal->setRamal($ramal);
   // print_r($objetoRamal);

    if($ramalDao->inserir($objetoRamal)){
       header("location:principal.php?ramal=true");
   }else{
      header("location:principal.php?ramal=false");
   }


}
?>