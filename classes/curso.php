<?php

class Curso{
  private $idCurso;
  private $nomeCurso;
  private $categoria;

function setIdCurso($idCurso){
  $this->idCurso = $idCurso;
}

function getIdCurso(){
  return $this->idCurso;
}

function setNomeCurso($nomeCurso){
  $this->nomeCurso = $nomeCurso;
}
function getNomeCurso(){
  return $this->nomeCurso;
}
function setCategoria($categoria){
  $this->categoria = $categoria;
}
  function getCategoria(){
  return $this->categoria;
}

function __toString(){
  return "O curso de id {$this->idCurso}. possui o nome de " .
          $this->nomeCurso."no valor do curso como parâmetro de".$this->categoria;

}


}

 ?>
