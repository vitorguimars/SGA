<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 24/05/2017
 * Time: 19:26
 */

require_once "./dao/cursoDAO.php";
require_once "./classes/curso.php";

if($_GET["id"] != null && $_GET["id"] != ""){

    $cursoDao = new CursoDAO();
    $curso = new Curso();
    $curso->getIdCurso($_GET["id"]);


    if($cursoDao->excluirCurso($curso) == true){
        header("location:listarCursos.php?excluido=true");
    }
    else{
       header("location:listarCursos.php?excluido=false");
    }
}
?>