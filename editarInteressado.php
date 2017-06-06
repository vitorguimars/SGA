<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 02/06/2017
 * Time: 19:40
 */

require_once "./banco/BancoPDO.php";
require_once "./classes/interessado.php";
require_once "./dao/interessadoDAO.php";

if($_POST["nomeTxt"]!="" && $_POST["telTxt"]!="" && $_POST["emailTxt"]!="" && $_POST["interesseTxt"]!="" && $_POST["interesseTxt"]!=null && $_POST["observacaoTxt"]!=""){
  

    $nome = $_POST["nomeTxt"];
    $tel = $_POST["telTxt"];
    $email = $_POST["emailTxt"];
    $interesse = $_POST["interesseTxt"];
    $observacao = $_POST["observacaoTxt"];

    $interessado = new Interessado();
    $interessadoDao = new InteressadoDAO();

    $interessado->setIdInteressado($_POST["id"]);
    $interessado->setNomeInteressado(strtoupper($_POST["nomeTxt"]));
    $interessado->setTelefone(strtoupper($_POST["telTxt"]));
    $interessado->setEmail(strtolower($_POST["emailTxt"]));
    $interessado->setInteresse($_POST["interesseTxt"]);
    $interessado->setObservacao(strtoupper($_POST["observacaoTxt"]));

    //print_r($objetoInteressado);

    if($interessado->getInteresse() != 0){
        if($interessadoDao->editarInteressado($interessado)){
            header("location:listarInteressados.php?editado=true");
        }else{
            header("location:listarInteressados.php?editado=false");
        }
    }
    else{
        echo "Selecione o campo de interesse!<br/>Redirecionando...";
        header("refresh:2;url=listarInteressados.php");
    }



}

?>