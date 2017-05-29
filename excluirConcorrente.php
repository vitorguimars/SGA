<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 26/05/2017
 * Time: 20:47
 */

require_once "./dao/concorrenteDAO.php";
require_once "./classes/concorrente.php";

if($_GET["id"] != null && $_GET["id"] != ""){
    $concorrenteDao = new ConcorrenteDAO();

    $concorrente = new Concorrente();
    $concorrente->setIdConcorrente($_GET["id"]);

    if($concorrenteDao->excluirConcorrente($concorrente) == true){
        header("location:listarConcorrentes.php?excluido=true");
    }
    else{
        header("location:listarConcorrentes.php?excluido=false");
    }
}


?>