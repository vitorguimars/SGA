<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 04/04/2017
 * Time: 10:22
 */

Class Mercado{
    private $id;
    private $questCandidato;
    private $abordagem;
}

function setId($id){
    $this->id = $id;

}
function getId(){
    return $this->id;
}

function setQuestCandidato($questCandidato){
    $this->questCandidato = $questCandidato;

}

function getQuestCandidato(){
    return $this->questCandidato;
}

function setAbordagem($abordagem){
    $this->abordagem = $abordagem;
}
function getAbordagem(){
    return $this->abordagem;
}


?>