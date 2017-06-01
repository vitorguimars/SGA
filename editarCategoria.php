<?php
/**
 * Created by PhpStorm.
 * User: Note02
 * Date: 01/06/2017
 * Time: 14:21
 */

require_once "./dao/categoriaDAO.php";
require_once "./classes/categoria.php";

if($_POST["id"] != null && $_POST["id"] != "" && $_POST["categoriaTxt"]!=null && $_POST["categoriaTxt"]!="" && $_POST["valorParamTxt"]!= null && $_POST["valorParamTxt"]!="" ){
    $categoriaDao = new CategoriaDAO();

    $categoria = new Categoria();
    $categoria->setIdCategoria($_POST["id"]);
    $categoria->setNomeCategoria($_POST["categoriaTxt"]);
    $categoria->setValorParametro($_POST["valorParamTxt"]);


    //print_r($caso);

    if($categoriaDao->editarCategoria($categoria) == true){
        header("location:listaCategorias.php?editado=true");
    }
    else{
        header("location:listaCategorias.php?editado=false");
    }

}

?>