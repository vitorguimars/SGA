<?php

/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 10/11/2016
 * Time: 12:47
 */
class Categoria
{

    private $idCategoria;
    private $nomeCategoria;
    private $valorParametro;

    function __construct(){

    }

function setIdCategoria($id){

    $this->idCaso = $id;
}

    function getCategoria(){
        return $this->idCategoria;
    }

    function setNomeCategoria($nome){
        $this->nomeCategoria = $nome;

    }

    function getNomeCategoria(){
        return $this->nomeCategoria;
    }

    function setValorParametro($valor){
        $this->valorParametro = $valor;
    }

    function getValorParametro(){
       return $this->valorParametro;
    }


}