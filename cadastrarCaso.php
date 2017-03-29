<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 28/03/2017
 * Time: 21:36
 */

if ($_POST["casoTxt"]!= ""){

    require_once "banco/BancoPDO.php";
    require_once "classes/caso.php";
    require_once "dao/casoDAO.php";



    $caso = $_POST["casoTxt"];
    $objetoCaso = new Caso();
    $casoDao = new casoDAO();

    $objetoCaso->setNomeCaso($caso);

    if($casoDao->inserir($objetoCaso)== true){
        echo  $objetoCaso->getNomeCaso(). " cadastrado com sucesso!";
        header("location:principal.php?caso=true");
    }else{
        header("location:principal.php?caso=false");
    }

   // header("refresh:3;url=principal.php");

}
?>