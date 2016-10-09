<?php

class BancoPDO{

 
  
  


  public $con = null;

  

  // metodo de conexão com a base de dados
  public function conexao(){
       $usuario = "root";
       $senha = "usbw";

    try{
     
           $this->con = new PDO('mysql:host=localhost;port=3307;dbname=dbsga;', $usuario, $senha);

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
