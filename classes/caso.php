<?php

class caso{
  private $idCaso;
  private $nomeCaso;

    function __construct($idCaso, $nomeCaso){
  $this->setIdCaso = $idCaso;
  $this->setNomeCaso = $nomeCaso;
}

function setIdCaso($idCaso){
  $this->idCaso = $idCaso;
}

function getIdCaso(){
  return $this->$idCaso;
}

function setNomeCaso($nomeCaso){
  $this->nomeCaso = $nomeCaso;
}

function getNomeCaso(){
  $this->$nomeCaso;
}

function __toString(){
  return "O caso de id {$this->idCaso}. possui o nome de " .
          $this->$nomeCaso;
}


}

 ?>
