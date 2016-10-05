<?php

class BancoPDO{

  public $tipo = "mysql";
  public $host =  "localhost";
  public $usuario = "root";
  public $senha = "usbw";
  public $banco = "dbsga";


  public $con = null;


  // metodo de conexão com a base de dados
  public function conexao(){

    try{
      // string de conexão com a base de dados
           // new PDO(dominio, usuario, senha);
           // dominio ===> mysql:host=localhost;dbname=pp1
           $this->con = new PDO($this->tipo.":host=".$this->host.";dbname".$this->banco,
                                $this->usuario,
                                $this->senha);

          // para que os erros de exceção sejam obrigatoriamente mostrados
          $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $this->con;
    }catch(PDOEXCEPTION $e){
      echo "Erro: " .$e->getMessage();

      echo $con->erroInfo();

    }

  }

}

 ?>
