<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 09/05/2017
 * Time: 20:08
 */

    class Interessado{

        private $idInteressado;
        private $nomeInteressado;
        private $telefone;
        private $email;
        private $interesse;
        private $observacao;

        function setIdInteressado($id){
            $this->idInteressado = $id;
        }

        function getIdInteressado(){
            return $this->idInteressado;
        }

        function setNomeInteressado($nome){
            $this->nomeInteressado = $nome;
        }
        function getNomeInteressado(){
            return $this->nomeInteressado;
        }

        function setTelefone($tel){
            $this->telefone = $tel;
        }
        function getTelefone(){
            return $this->telefone;
        }
        function setEmail($email){
            $this->email = $email;

        }
        function getEmail(){
            return $this->email;
        }
        function setInteresse($interesse){
            $this->interesse = $interesse;
        }

        function getInteresse(){
            return $this->interesse;
        }
        function setObservacao($observ){
            $this->observacao = $observ;
        }
        function getObservacao(){
            return $this->observacao;
        }
        function __toString(){
            return "O interessado de id {$this->idInteressado}. possui o nome de " .
            $this->nomeInteressado;
        }

    }



?>