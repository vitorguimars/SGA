<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 23/05/2017
 * Time: 19:26
 */

require_once "./dao/categoriaDAO.php";
require_once "./classes/categoria.php";

if($_GET["id"] != null && $_GET["id"] != ""){
    $categoriaDAO = new CategoriaDAO();

    $categoria = new Categoria();
    $categoria->setIdCategoria($_GET["id"]);

    if($categoriaDAO->excluirCategoria($categoria) == true){
        header("location:listaCategorias.php?excluido=true");
    }
    else{
        header("location:listaCategorias.php?excluido=false");
    }
}

?>