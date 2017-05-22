<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 18/05/2017
 * Time: 21:33
 */

if($_POST["categoriaTxt"]!="" && $_POST["cursoTxt"]!="" && $_POST["empresaTxt"]!="" && $_POST["siteTxt"]!="" && $_POST["prodServTxt"]!="" && $_POST["impactoTxt"]!="" && $_POST["observacaoTxt"]!=""){

    require_once './banco/BancoPDO.php';
    require_once'./classes/concorrente.php';
    require_once './dao/concorrenteDAO.php';

    $categoria = $_POST["categoriaTxt"];
    $curso = $_POST["cursoTxt"];
    $empresa = $_POST["empresaTxt"];
    $site = $_POST["siteTxt"];
    $prod = $_POST["prodServTxt"];
    $impacto = $_POST["impactoTxt"];
    $observ = $_POST["observacaoTxt"];

    $objetoConcorrente = new Concorrente();
    $concorrenteDao = new ConcorrenteDAO();

    $objetoConcorrente->setCategoria($categoria);
    $objetoConcorrente->setCurso($curso);
    $objetoConcorrente->setNomeEmpresa($empresa);
    $objetoConcorrente->setSite($site);
    $objetoConcorrente->setProduto($prod);
    $objetoConcorrente->setImpacto($impacto);
    $objetoConcorrente->setObservacao($observ);

    print_r($objetoConcorrente);

    if($concorrenteDao->inserir($objetoConcorrente) == true){
        header("location:principal.php?concorrente = true");
    }else{
        header("location:principal.php?concorrente = false");
    }

}

?>