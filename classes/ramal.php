<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 08/05/2017
 * Time: 19:08
 */

class Ramal{

    private $idRamal;
    private $nome;
    private $setor;
    private $ramal;

    function setIdRamal($id){
        $this->idRamal = $id;

    }

    function getIdRamal(){
        return $this->idRamal;
    }

    function setNome($nome){

        $this->nome = $nome;

    }
    function getNome(){
        return $this->nome;
    }

    function setSetor($setor){
        $this->setor = $setor;

    }

    function getSetor(){
        return $this->setor;
    }

    function setRamal($ramal){
        $this->ramal = $ramal;

    }
    function getRamal(){
        return $this->ramal;
    }

    function __toString(){
        return "O ramal de id {$this->idRamal}. possui o nome de " .
        $this->ramal;
    }
}

