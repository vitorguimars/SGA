<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 26/10/2016
 * Time: 21:56
 */

class Desconto{
    private $id;
    private $desconto;


    function __construct(){

    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
    function getDesconto(){
        return $this->desconto;
    }
    function setDesconto($desconto){
        $this->desconto = $desconto;
    }


}
?>