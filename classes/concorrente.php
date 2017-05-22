<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 18/05/2017
 * Time: 20:02
 */
class Concorrente{

    private $idConcorrente;
    private $categoria;
    private $curso;
    private $nomeEmpresa;
    private $site;
    private $prodServ;
    private $impacto;
    private $obsevacao;


    public function setIdConcorrente($id){

        $this->idConcorrente = $id;
}
    public function getIdConcorrrente(){
        return $this->idConcorrente;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    public function getCategoria(){
        return $this->categoria;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }
    public function getCurso(){
        return $this->curso;
    }

    public function setNomeEmpresa($nome){
        $this->nomeEmpresa = $nome;
    }

    public function getNomeEmpresa(){
       return $this->nomeEmpresa;
    }
    public function setSite($nomeSite){
        $this->site = $nomeSite;
    }
    public function getSite(){
       return $this->site;
    }

    public function setProduto($prod){
        $this->prodServ = $prod;
    }

    public function getProduto(){
       return $this->prodServ;
    }

    public function setImpacto($imp){
        $this->impacto = $imp;

    }

    public function getImpacto(){
       return $this->impacto;
    }

    public function setObservacao($observ){
        $this->obsevacao = $observ;
    }
    public function getObservacao(){
       return $this->obsevacao;
    }

    function __toString(){
        return "O concorrente de id {$this->idConcorrente}. possui o nome de " .
        $this->nomeEmpresa;

    }

}
?>