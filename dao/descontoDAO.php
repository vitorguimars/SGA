<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 26/10/2016
 * Time: 22:04
 */

require_once'./banco/BancoPDO.php';
require_once'./classes/desconto.php';
require_once'./dao/categoriaDAO.php';
require_once'./dao/creditoDAO.php';


class DescontoDAO{
    public static $conexao = null;

    public function __contruct(){

    }

    public function inserir(){
        try{
            $con = new BancoPDO();
            $con = $con->conexao();
            $sql = $con->prepare("INSERT INTO tbdescontos(id ,des1, desc2, fk_tbcasos_id, fk_tbcredito)VALUES(?,?,?,?,?)");
            $sql->bindValue(1,id);
            $sql->bindValue(2,desc1);
            $sql->bindValue(3,desc2);
            $sql->bindValue(4,fk_tbcasos_id);
            $sql->bindValue(5, fk_tbcredito);

            if($stm = $sql->execute($sql)){

                echo 'Dados inseridos com sucesso! ';
            }

        }catch (Exception $ex){
            echo"Erro: " .$ex->getMessage();
        }
    }



    public function vParcela1a6(){

        //para calcular parcelas  de 1 a 6 (normal)
        // $resultado = Qtde de credito * valor mensal credito

        try{

            $valorMensal = new CategoriaDAO();
            $valor = $valorMensal->getVMensal();


            return $valor;



        }catch (Exception $ex){

            echo "Erro:" .$ex->getMessage();

        }
    }

    public function getDesconto(Caso $caso, Credito $credito){
        try{
            $con = new BancoPDO();
            $con = $con->conexao();
            $sql = $con->prepare("SELECT desc1 FROM tbdesconto WHERE fk_tbcasos_id = ? AND fk_tbcredito = ?");
            $sql->bindValue(1,$caso->getIdCaso());
            $sql->bindValue(2, $credito->getIdCredito());

            if($stm = $sql->execute($sql)){
                $stm->execute();
                $con = null;
                return $this->populaDesconto($stm->fetch(PDO::FETCH_OBJ));            }

        }
        catch(Exception $ex){
            echo "Erro: " . $ex->getMessage();
        }
    }

    private function populaDesconto($row) {
        $desconto = new Desconto();

        $desconto->setId($row->id);
        $desconto->setDesconto1($row->desc1);
        return $desconto;
    }




}

?>