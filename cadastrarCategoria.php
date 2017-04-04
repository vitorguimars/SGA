<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 03/04/2017
 * Time: 19:39
 */

if ($_POST["nomeCategoriaTxt"]!= "" && $_POST["valorParamTxt"]!= ""){

    require_once "banco/BancoPDO.php";
    require_once "classes/categoria.php";
    require_once "dao/categoriaDAO.php";



    $nomeCategoria = $_POST["nomeCategoriaTxt"];
    $valorParam = $_POST["valorParamTxt"];
    $objetoCategoria = new Categoria();
    $categoriaDao = new CategoriaDAO();

    $objetoCategoria->setNomeCategoria($nomeCategoria);
    $objetoCategoria->setValorParametro($valorParam);

   if($categoriaDao->inserir($objetoCategoria)== true){
        echo  $objetoCategoria->getNomeCategoria(). " cadastrado com sucesso!";
       header("location:principal.php?categoria=true");
    }else{
       header("location:principal.php?categoria=false");
    }

    // header("refresh:3;url=principal.php");
  //  print_r($objetoCategoria);

}

?>