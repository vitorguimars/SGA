<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 16/05/2017
 * Time: 21:44
 */

if($_POST["nomeTxt"]!="" && $_POST["categoriaTxt"]!=""){
    require_once "./banco/BancoPDO.php";
    require_once "./classes/curso.php";
    require_once "./dao/cursoDAO.php";

    $nome = $_POST["nomeTxt"];
    $categoria = $_POST["categoriaTxt"];

    $objetoCurso = new Curso();
    $cursoDao = new CursoDAO();

    $objetoCurso->setNomeCurso($nome);
    $objetoCurso->setCategoria($categoria);


  // print_r($objetoCurso);

    if($cursoDao->inserir($objetoCurso)){
        header("location:principal.php?curso = true");
    }else{
        header("location:principal.php?curso = false");
   }

}

?>