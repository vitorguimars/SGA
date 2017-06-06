<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 23/05/2017
 * Time: 21:23
 */
require_once'../sga/dao/concorrenteDAO.php';
$concorrenteDao = new ConcorrenteDAO();
$verCategoria = $concorrenteDao->visualizarModalidade();
$verCurso = $concorrenteDao->visualizarCurso();

error_reporting(E_ERROR | E_WARNING | E_PARSE);
if($_GET["excluido"]!= null){
    if($_GET["excluido"]== "true"){
        echo "<script>alert('Dados excluidos com sucesso!');</script>";

    }

    else if($_GET["excluido"]== "false"){
        echo "<script>alert('Erro ao excluir!');</script>";

    }
    header("refresh:1;url=listarConcorrentes.php");
}

if($_GET["editado"]!= null){
    if($_GET["editado"]== "true"){
        echo "<script>alert('Dados alterados com sucesso!');</script>";

    }

    else if($_GET["editado"]== "false"){
        echo "<script>alert('Erro ao alterar dados!');</script>";

    }
    header("refresh:1;url=listarConcorrentes.php");
}

?>



<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>


    <title>SGA</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="principal.php">
                <i class="fa fa-play-circle"></i> <span class="light">Tela</span> Inicial
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">SGA</h1>
                    <p class="intro-text">Gerenciamento de Concorrentes</p>
                    <!--<br>Faculdade Senai de Tecnologia</p> -->

                </div>
            </div>
        </div>
    </div>
</header>




<section  class="container text-center">
    <div class="row" id="concorrente">
        <div class="col-lg-6 col-lg-offset-1">
            <div >
                <table class="table table-bordered table-responsive">

                    <tr>

                        <th>Categoria</th>
                        <th>Curso</th>
                        <th>Empresa</th>
                        <th>Site</th>
                        <th>Produto/Serviço</th>
                        <th>Impacto/Negócio</th>
                        <th>Observação</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>

                    <tbody>
                    <?php
                    require_once "./dao/concorrenteDAO.php";
                    $concorrenteDao = new ConcorrenteDAO();
                    $resultado = $concorrenteDao->listarConcorrentes();
                    $i = 1;
                    foreach($resultado as $row){
                        echo "<tr>";
                        //  echo "<td>". $row["id"] . "</td>";

                        echo "<td>".$row["nomecategoria"]."</td>";
                        echo "<td>".$row["nomecurso"]."</td>";
                        echo "<td>".$row["empresa"]."</td>";
                        echo "<td>".$row["site"]."</td>";
                        echo "<td>".$row["produto"]."</td>";
                        echo "<td>".$row["impacto"]."</td>";
                        echo "<td>".$row["observacao"]."</td>";
                        echo "<td><a href='#'data-toggle='modal' data-target='#modalConcorrentes".$i."'>Editar</a></td>";
                        echo "<td><a href='excluirConcorrente.php?id=".$row["idConcorrente"]."'>Excluir</a></td>";
                        echo "</tr>";

                        echo"

                        <div class='modal fade' id='modalConcorrentes".$i."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>

                <form method='post' action='editarConcorrente.php' id='formConcorrente' name='formConcorrente' >
                    <h2 style='color: #080808'>Edição de Concorrentes</h2>
                    <label style='color: #080808'>Categoria: </label>
                    <div class='form-group'>
                    <select class='form-control' name='categoriaTxt'>
                                <option value='0'>Selecione...</option>";
                        $k = 1;
                        foreach($verCategoria as $linha){
                            echo "<option value='".$k."'>".$linha["nomecategoria"]."</option>";
                            $k++;
                        }
                        echo " </select><br><br>

                    <label style='color: #080808'>Curso: </label>
                    <select class='form-control' name='cursoTxt'>
                                <option value='0'>Selecione...</option>";
                        $j = 1;
                        foreach($verCurso as $linhaCurso){
                            echo "<option value='".$j."'>".$linhaCurso["nomecurso"]."</option>";
                            $j++;
                        }
                        echo " </select><br><br>
                         <label style='color: #080808'>Nome da Empresa: </label>
            <input type='text' class='form-control text-uppercase'  style='color: #080808' name='empresaTxt' id='empresaTxt' value='".$row["empresa"]."' />
            <label style='color: #080808'>Site: </label>
            <input type='hidden' name='id' id='id' value='".$row["idConcorrente"]."' />
            <input type='text' class='form-control' style='color: #080808' name='siteTxt' id='siteTxt' value='".$row["site"]."'/>
            <label style='color: #080808'>Produto/Serviço </label>
            <input type='text' class='form-control text-uppercase' style='color: #080808' name='prodServTxt' id='prodServTxt' value='".$row["produto"]."' />
            <label style='color: #080808'>Impacto/Negócio: </label>
            <input type='text' class='form-control text-uppercase' style='color: #080808' name='impactoTxt' id='impactoTxt' value='".$row["impacto"]."'/>
            <label style='color: #080808'>Observação/Diferenciais: </label><br>
            <textarea class='text-uppercase' rows='4' cols='50' name='observacaoTxt' id='observacaoTxt' style='color: #080808'>".$row["observacao"]."</textarea><br><br>

            <button type='submit' class='btn btn-primary'>Editar</button><br><br>
            </form>
        </div>
        <div class='modal-footer'>
            <!-- <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
             <button type='button' class='btn btn-primary'>Save changes</button> -->
        </div>
    </div>
    </div>
    </div>

                        ";
                        $i++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>




<!-- Map Section -->
<!-- <div id="map"></div>  -->

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Copyright &copy;<a href="http://www.senairs.com.br/faculdade" </a>www.senairs.com.br/faculdade - 2017</p>
    </div>
</footer>

<!-- jQuery -->
<script src="vendor/jquery/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Theme JavaScript -->
<script src="js/grayscale.min.js"></script>

</body>

</html>



