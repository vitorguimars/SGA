<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 26/10/2016
 * Time: 21:56
 */

class Desconto{
    private $id;
    private $desconto1;
    private $desconto2;



    function __construct(){

    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
    function getDesconto1(){
        return $this->desconto1;
    }
    function setDesconto1($desc1){
        $this->desconto1 = $desc1;
    }

    function getDesconto2(){
        return $this->desconto2;
    }
    function setDesconto2($desc2){
        $this->desconto2 = $desc2;
    }



}
?>