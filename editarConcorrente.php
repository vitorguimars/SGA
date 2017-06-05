<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 05/06/2017
 * Time: 09:01
 */

require_once "./banco/BancoPDO.php";
require_once "./classes/concorrente.php";
require_once "./dao/concorrenteDAO.php";

if($_POST["categoriaTxt"]!="" && $_POST["cursoTxt"]!="" && $_POST["empresaTxt"]!="" && $_POST["siteTxt"]!="" && $_POST["prodServTxt"]!="" && $_POST["impactoTxt"]!="" && $_POST["observacaoTxt"]!=""){



    $categoria = $_POST["categoriaTxt"];
    $curso = $_POST["cursoTxt"];
    $empresa = $_POST["empresaTxt"];
    $site = $_POST["siteTxt"];
    $prod = $_POST["prodServTxt"];
    $impacto = $_POST["impactoTxt"];
    $observ = $_POST["observacaoTxt"];


    $concorrente = new Concorrente();
    $concorrenteDao = new ConcorrenteDAO();

    $concorrente->setIdConcorrente($_POST["id"]);
    $concorrente->setCategoria($_POST["categoriaTxt"]);
    $concorrente->setCurso($_POST["cursoTxt"]);
    $concorrente->setNomeEmpresa(strtoupper($_POST["empresaTxt"]));
    $concorrente->setSite($_POST["siteTxt"]);
    $concorrente->setProduto(strtoupper($_POST["prodServTxt"]));
    $concorrente->setImpacto(strtoupper($_POST["impactoTxt"]));
    $concorrente->setObservacao(strtoupper($_POST["impactoTxt"]));





    //  print_r($curso);



    if($concorrenteDao->editarConcorrente($concorrente)){
        header("location:listarConcorrentes.php?editado=true");
    }else{
        header("location:listarConcorrentes.php?editado=false");
    }

}
?>