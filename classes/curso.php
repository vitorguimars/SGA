<?php

class curso{
  private $idCurso;
  private $nomeCurso;
  private $tipoCurso;
  private $valorParametro;

function __construct($idCurso, $nomeCurso, $tipoCurso, $valorParametro){
  $this->setIdCurso = $idCurso;
  $this->setNomeCurso = $nomeCurso;
  $this->setTipoCurso = $tipoCurso;
  $this->setValorParametro = $valorParametro;
}

function setIdCurso($idCurso){
  $this->idCurso = $idCurso;
}

function getIdCurso(){
  return $this->$idCurso;
}

function setNomeCurso($nomeCurso){
  $this->nomeCurso = $nomeCurso;
}
function getNomeCurso(){
  return $this->$nomeCurso;
}

function setTipoCurso($tipoCurso){
  $this->tipoCurso = $tipoCurso;
}

function getTipoCurso(){
  return $this->$tipoCurso;
}

function setValorParametro($valorParametro){
  $this->valorParametro = $valorParametro;
}

function __toString(){
  return "O curso de id {$this->idCurso}. possui o nome de " .
          $this->nomeCurso."na categoria de ".$this->tipoCurso."no valor do curso como parâmetro de".$this->valorParametro;

}


}

 ?>
