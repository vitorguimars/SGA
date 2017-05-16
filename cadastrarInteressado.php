<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 09/05/2017
 * Time: 21:37
 */

if($_POST["nomeTxt"]!="" && $_POST["telTxt"]!="" && $_POST["emailTxt"]!="" && $_POST["interesseTxt"]!="" && $_POST["observacaoTxt"]!=""){
    require_once "./banco/BancoPDO.php";
    require_once "./classes/interessado.php";
    require_once "./dao/interessadoDAO.php";

    $nome = $_POST["nomeTxt"];
    $tel = $_POST["telTxt"];
    $email = $_POST["emailTxt"];
    $interesse = $_POST["interesseTxt"];
    $observacao = $_POST["observacaoTxt"];

    $objetoInteressado = new Interessado();
    $interessadoDao = new InteressadoDAO();

    $objetoInteressado->setNomeInteressado($nome);
    $objetoInteressado->setTelefone($tel);
    $objetoInteressado->setInteresse($interesse);
    $objetoInteressado->setObservacao($observacao);
    $objetoInteressado->setEmail($email);

    print_r($objetoInteressado);

    if($interessadoDao->inserir($objetoInteressado)== true){
        header("location:principal.php?interesse = true");
    }else{
        header("location:principal.php?interesse = false");
    }

}

?>