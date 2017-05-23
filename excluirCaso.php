<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 23/05/2017
 * Time: 11:32
 */
    require_once "./dao/casoDAO.php";
    require_once "./classes/caso.php";

    if($_GET["id"] != null && $_GET["id"] != ""){
        $casoDAO = new casoDAO();

        $caso = new Caso();
        $caso->setIdCaso($_GET["id"]);

        if($casoDAO->excluirCaso($caso) == true){
            header("location:listaCasos.php?excluido=true");
        }
        else{
            header("location:listaCasos.php?excluido=false");
        }
    }
?>