<?php

class Credito{
private $idCredito;
private $numCredito;
private $desconto;




function getIdCredito() {
    return $this->idCredito;
}

function getNumCredito() {
    return $this->numCredito;
}

function getDesconto() {
    return $this->desconto;
}

function setIdCredito($idCredito) {
    $this->idCredito = $idCredito;
}

function setNumCredito($numCredito) {
    $this->numCredito = $numCredito;
}

function setDesconto($desconto) {
    $this->desconto = $desconto;
}

}

?>


