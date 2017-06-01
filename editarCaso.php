<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 31/05/2017
 * Time: 21:01
 */

require_once "./dao/casoDAO.php";
require_once "./classes/caso.php";

if($_POST["id"] != null && $_POST["id"] != "" && $_POST["casoTxt"]!=null && $_POST["casoTxt"]!=""){
    $casoDAO = new casoDAO();

    $caso = new Caso();
    $caso->setIdCaso($_POST["id"]);
    $caso->setNomeCaso($_POST["casoTxt"]);


    print_r($caso);

    if($casoDAO->editarCaso($caso) == true){
        header("location:listaCasos.php?editado=true");
    }
    else{
        header("location:listaCasos.php?editado=false");
    }

}

?>