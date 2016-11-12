<?php

class Caso{
  private $idCaso;
  private $nomeCaso;
  
  function __construct(){
      
  }
           

function setIdCaso($id){
  $this->idCaso = $id;
}

function getIdCaso(){
  return $this->idCaso;
}

function setNomeCaso($nome){
  $this->nomeCaso = $nome;
}

function getNomeCaso(){
 return $this->nomeCaso;
}

function __toString(){
  return "O caso de id {$this->idCaso}. possui o nome de " .
    $this->nomeCaso;
}


}

 ?>
