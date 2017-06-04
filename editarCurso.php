<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 03/06/2017
 * Time: 20:13
 */
require_once "./banco/BancoPDO.php";
require_once "./classes/curso.php";
require_once "./dao/cursoDAO.php";

if($_POST["nomeTxt"]!="" && $_POST["categoriaTxt"]!=""){


    $nome = $_POST["nomeTxt"];
    $categoria = $_POST["categoriaTxt"];



    $curso = new Curso();
    $cursoDao = new CursoDAO();

    $curso->setIdCurso($_POST["id"]);
    $curso->setNomeCurso(strtoupper($_POST["nomeTxt"]));
    $curso->setCategoria($_POST["categoriaTxt"]);


  //  print_r($curso);



    if($cursoDao->editarCurso($curso)){
        header("location:listarCursos.php?editado=true");
    }else{
        header("location:listarCursos.php?editado=false");
    }

}

?>