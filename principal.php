
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
   if($_GET["caso"]!= null){
       if($_GET["caso"]== "true"){
           echo "<script>alert('Dados Cadastrado com sucesso!');</script>";

       }

       else if($_GET["caso"]== "false"){
           echo "<script>alert('Erro ao cadastrar!');</script>";

       }
       header("refresh:1;url=principal.php");
   }
if($_GET["categoria"]!= null){
    if($_GET["categoria"]== "true"){
        echo "<script>alert('Dados Cadastrado com sucesso!');</script>";

    }

    else if($_GET["categoria"]== "false"){
        echo "<script>alert('Erro ao cadastrar!');</script>";

    }
    header("refresh:1;url=principal.php");
}
if($_GET["credito"]!= null){
    if($_GET["credito"]== "true"){
        echo "<script>alert('Dados Cadastrado com sucesso!');</script>";

    }

    else if($_GET["credito"]== "false"){
        echo "<script>alert('Erro ao cadastrar!');</script>";

    }
    header("refresh:1;url=principal.php");
}
if($_GET["mercado"]!= null){
    if($_GET["mercado"]== "true"){
        echo "<script>alert('Dados Cadastrado com sucesso!');</script>";

    }

    else if($_GET["mercado"]== "false"){
        echo "<script>alert('Erro ao cadastrar!');</script>";

    }
    header("refresh:1;url=principal.php");
}
if($_GET["editado"]!= null){
    if($_GET["editado"] == true){
      echo "<script>alert('Dados alterados com sucesso!');</script>";
   }
   else if($_GET["editado"]== "false"){
        echo "<script>alert('Erro ao editar!');</script>";
    }
    header("refresh:1;url=principal.php");

}

if($_GET["excluido"]!= null){
    if($_GET["excluido"]== "true"){
        echo "<script>alert('Dados excluidos com sucesso!');</script>";

    }

    else if($_GET["excluido"]== "false"){
        echo "<script>alert('Erro ao excluir!');</script>";

    }
    header("refresh:1;url=principal.php");
}
if($_GET["interesse"]!= null){
    if($_GET["interesse"] == true){
        echo "<script>alert('Dados Cadastrados com sucesso');</script>";
    }
    else if($_GET["interessado"]== false){
        echo "<script>alert('Erro ao cadastrar!');</script>";
    }
    header("refresh:1;url=principal.php");

}

if($_GET["curso"]!= null){
    if($_GET["curso"] == true){
        echo "<script>alert('Dados Cadastrados com sucesso');</script>";
    }
    else if($_GET["curso"]== false){
        echo "<script>alert('Erro ao cadastrar!');</script>";
    }
    header("refresh:1;url=principal.php");

}

if($_GET["concorrente"] != null){
    if($_GET["concorrente"] == true){
        echo "<script>alert('Dados cadastrados com sucesso!');</script>";
    }
    elseif($_GET["concorrente"] == false){
        echo"<script>alert('Erro ao cadastrar!');</script>";

    }
    header("refresh:1;url=principal.php");
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


        <title>SGA - Sitema de Gestão de Atendimentos</title>

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
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-play-circle"></i> <span class="light">Tela</span> Inicial
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Cadastros</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#ramais">Ramais</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#download">Portfolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#gerais">Informações Gerais</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#simulador">Simulador</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="index.php">Sair</a>
                        </li>

                    </ul>
                </div>
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
                            <p class="intro-text">SISTEMA DE GESTÃO DE ATENDIMENTOS</p>
                                <!--<br>Faculdade Senai de Tecnologia</p> -->
                            <a href="#about" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Cadastros Section -->
        <section id="about" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Gerenciamento de Cadastros</h2>
                    <a href="#" class="btn btn-default btn-lg"data-toggle="modal" data-target="#modalCasos">Casos</a>
                    <a href="#" class="btn btn-default btn-lg"data-toggle="modal" data-target="#modalCategorias">Categorias</a>
                    <a href="#" class="btn btn-default btn-lg"data-toggle="modal" data-target="#modalMercado">Mercado de Trabalho</a>
                    <a href="#" class="btn btn-default btn-lg"data-toggle="modal" data-target="#modalCreditos">Créditos</a>
                    <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modalConcorrentes">Concorrentes</a>
                    <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modalCursos">Cursos</a>
                    <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modalRamais">Ramais</a>
                    <a href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modalInteressados">Interessados</a>

                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalCasos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="cadastrarCaso.php" id="formCaso" name="formCaso" >
                                    <h2 style="color: #080808">Cadastro de Casos</h2>
                                    <label style="color: #080808">Nome do Caso: </label>
                                    <input type="text" style="color: #080808" name="casoTxt" id="casoTxt" /><br><br>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button><br><br>
                                    <a href="listaCasos.php" >Visualizar casos</a>
                                </form>
                            </div>
                            <div class="modal-footer">
                               <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalCategorias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="cadastrarCategoria.php" id="formCategoria" name="formCategoria" >
                                    <h2 style="color: #080808">Cadastro de Categorias</h2>
                                    <label style="color: #080808">Nome da Categoria: </label>
                                    <input type="text" style="color: #080808" name="nomeCategoriaTxt" id="nomeCategoriaTxt" /><br><br>
                                    <label style="color: #080808">Valor Parametro: </label>
                                    <input type="text" style="color: #080808" name="valorParamTxt" id="valorParamTxt" /><br><br>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button><br><br>
                                    <a href="listaCategorias.php" >Visualizar categorias</a>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalMercado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="cadastrarMercado.php" id="formMercado" name="formMercado" >
                                    <h2 style="color: #080808">Mercado de Trabalho</h2>
                                    <label style="color: #080808">Possivel questionamento do candidato: </label><br><br>
                                    <textarea rows="4" cols="50" name="questTxt" id="questTxt" class="text-uppercase" style="color: #080808"></textarea><br><br>
                                    <label style="color: #080808">Abordagem: </label><br><br>
                                    <textarea rows="4" cols="50" name="abordagemTxt" id="abordagemtTxt"class="text-uppercase" style="color: #080808"></textarea><br><br>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button><br><br>
                                    <a href="listaMercados.php" >Visualizar Mercado de Trabalho</a>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalCreditos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="cadastrarCredito.php" id="formCredito" name="formCredito" >
                                    <h2 style="color: #080808">Cadastro de Créditos</h2>
                                    <label style="color: #080808">Quantidade de Créditos: </label>
                                    <input type="text" style="color: #080808" name="creditoTxt" id="creditoTxt" />
                                    <button type="submit" class="btn btn-primary">Cadastrar</button><br><br>
                                    <a href="listarCreditos.php" >Visualizar Lista de Creditos</a>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalRamais" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="cadastrarRamal.php" id="formRamal" name="formRamal" >
                                    <h2 style="color: #080808">Cadastro de Ramais</h2>
                                    <label style="color: #080808">Nome: </label>
                                    <input type="text "class="form-control text-uppercase"style="color: #080808" name="nomeTxt" id="nomeTxt" /><br><br>
                                    <label style="color: #080808">Setor: </label>
                                    <input type="text" class="form-control text-uppercase" style="color: #080808" name="setorTxt" id="setorTxt" /><br><br>
                                    <label style="color: #080808">Ramal: </label>
                                    <input type="text" style="color: #080808" name="ramalTxt" id="ramalTxt" /><br><br>

                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalInteressados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="cadastrarInteressado.php" id="formInteressado" name="formInteressado" >
                                    <h2 style="color: #080808">Cadastro de Interessados</h2>
                                    <label style="color: #080808">Nome: </label>
                                    <input type="text" class="form-control text-uppercase" style="color: #080808" name="nomeTxt" id="nomeTxt" />
                                    <label style="color: #080808">Telefone: </label>
                                    <input type="text" class="form-control"  style="color: #080808" name="telTxt" id="telTxt" />
                                    <label style="color: #080808">E-mail: </label>
                                    <input type="text" class="form-control"  style="color: #080808" name="emailTxt" id="emailTxt" /><br><br>
                                    <label style="color: #080808">Interesse: </label>
                                    <div class="form-group">
                                    <select class="form-control" name="interesseTxt">
                                        <option value="0">Selecione...</option>
                                        <?php
                                         require_once'../sga/dao/interessadoDAO.php';
                                         $interessadoDao = new InteressadoDAO();
                                         $interessado = $interessadoDao->visualizar();
                                        ?>
                                    </select>
                                    </div>
                                    <label style="color: #080808">Obervação: </label><br>
                                    <textarea rows="4" cols="50" name="observacaoTxt" id="observacaoTxt" style="color: #080808"></textarea><br><br>

                                    <button type="submit" class="btn btn-primary">Cadastrar</button><br><br>
                                    <a href="listarInteressados.php" >Visualizar Lista de Interessados</a>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalCursos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="cadastrarCurso.php" id="formCurso" name="formCurso" >
                                    <h2 style="color: #080808">Cadastro de Cursos</h2>
                                    <label style="color: #080808">Nome do Curso: </label>
                                    <input type="text" class="form-control text-uppercase" style="color: #080808" name="nomeTxt" id="nomeTxt" />
                                    <label style="color: #080808">Categoria: </label>
                                    <div class="form-group">
                                        <select class="form-control" name="categoriaTxt">
                                            <option value="0">Selecione...</option>
                                            <?php
                                            require_once'../sga/dao/cursoDAO.php';
                                            $cursoDao = new cursoDAO();
                                            $curso = $cursoDao->visualizar();
                                            ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button><br><br>
                                    <a href="listarCursos.php" >Visualizar cursos</a>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalConcorrentes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="cadastrarConcorrente.php" id="formConcorrente" name="formConcorrente" >
                                    <h2 style="color: #080808">Cadastro de Concorrentes</h2>
                                    <label style="color: #080808">Categoria: </label>
                                    <div class="form-group">
                                    <select class="form-control" name="categoriaTxt" required="true">
                                        <option value="0">Selecione...</option>
                                        <?php
                                        require_once'../sga/dao/concorrenteDAO.php';
                                        $concorrenteDao = new ConcorrenteDAO();
                                        $categoria = $concorrenteDao->comboCategoria();
                                        ?>
                                    </select>
                                        <label style="color: #080808">Curso: </label>
                                    <select class="form-control" name="cursoTxt">
                                        <option value="0">Selecione...</option>
                                        <?php
                                        require_once'../sga/dao/concorrenteDAO.php';
                                        $concorrenteDao = new ConcorrenteDAO();
                                        $curso = $concorrenteDao->comboCurso();
                                        ?>
                                    </select>
                                        </div>
                                    <label style="color: #080808">Nome da Empresa: </label>
                                    <input type="text" class="form-control text-uppercase"  style="color: #080808" name="empresaTxt" id="empresaTxt" />
                                    <label style="color: #080808">Site: </label>
                                    <input type="text" class="form-control" style="color: #080808" name="siteTxt" id="siteTxt" />
                                    <label style="color: #080808">Produto/Serviço: </label>
                                    <input type="text" class="form-control text-uppercase" style="color: #080808" name="prodServTxt" id="prodServTxt" />
                                    <label style="color: #080808">Impacto ao nosso negócio: </label>
                                    <input type="text" class="form-control text-uppercase" style="color: #080808" name="impactoTxt" id="impactoTxt" />
                                    <label style="color: #080808">Obervação/Diferenciais: </label><br>
                                    <textarea class="text-uppercase" rows="4" cols="50" name="observacaoTxt" id="observacaoTxt" style="color: #080808"></textarea><br><br>



                                    <button type="submit" class="btn btn-primary">Cadastrar</button><br><br>
                                    <a href="listarConcorrentes.php" >Visualizar concorrentes</a>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ramais Section -->
        <section id="ramais" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Lista de Ramais</h2>
                    <div >
                        <table class="table table-bordered table-responsive">

                            <tr>

                                <th>Nome</th>
                                <th>Setor</th>
                                <th>Ramal</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>

                            <tbody>
                            <?php
                            require_once "./dao/ramalDAO.php";
                            $ramalDao = new ramalDAO();
                            $resultado = $ramalDao->listarRamais();
                            $i = 1;
                            foreach($resultado as $row){
                                echo "<tr>";
                                echo "<td>".$row["nome"]."</td>";
                                echo "<td>".$row["setor"]."</td>";
                                echo "<td>".$row["ramal"]."</td>";
                                echo "<td><a href='#'data-toggle='modal' data-target='#modalRamais".$i."'>Editar</a></td>";
                                echo "<td><a href='excluirRamais.php?id=".$row["id"]."'>Excluir</a></td>";
                                echo "</tr>";

                                echo "

                            <div class='modal fade' id='modalRamais".$i."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>

                <form method='post' action= 'editarRamal.php' id='formRamal' name='formRamal' >
                            <h2 style='color: #080808'>Editar Casos</h2>
                    <label style='color: #080808'>Nome: </label>
                    <input type='hidden' name='id' id='id' value='".$row["id"]."' />
                    <input type='text' value='".$row["nome"]."' style='color: #080808' name='nomeTxt' id='nomeTxt' /><br><br>
                    <label style='color: #080808'>Setor: </label>
                    <input type='text' value='".$row["setor"]."' style='color: #080808' name='setorTxt' id='setorTxt' /><br><br>
                    <label style='color: #080808'>Ramal: </label>
                    <input type='text' value='".$row["ramal"]."' style='color: #080808' name='ramalTxt' id='ramalTxt' /><br><br>
                    <button type='submit' class='btn btn-primary'>Editar</button>
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


        <!-- Portfolio -->
        <section id="download" class="content-section text-center">
            <div class="download-section">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Protfolio</h2>
                        <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                        <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Informações Gerais -->
        <section id="gerais" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Informações Gerais</h2>

                    <p>Cursos Superiores chancelados e direcionados pelas demandas dos nossos empresários industriais, conceito 4 MEC,
                    prova única de redação, laboratórios de primeira linha, estacionamento gratuito e, obviamente, toda
                    credibilidade da marca SENAIRS no seu currículo profissional.</p>
                    <p>
                    <ul class="col-lg-8 col-lg-offset-2">
                        <li>
                            <i><u>Formas de Ingresso : </i></u> Vestibular, Transferência e diplomados.
                        </li>
                        <li>
                           <i><u>Seleção para Ingresso : </i></u> Redação (mediante agendamento).
                        </li>
                    <li>
                        <i><u>Horário da prova : </i></u>19:00 ás 21:00 (tempo para a realização da prova).
                    </li>
                    <li>
                        <i><u>Local da prova:</i></u>Av. Assis Brasil, 8450 - Sarandi - Porto Alegre (Estacionamento no local - Gratuito).
                    </li>
                        <li>
                            <i><u>Taxa de inscrição do Vestibular :</i></u>A taxa de inscrição será substituida por um alimento não perecível que pode ser 1kg de arroz ou 1kg de feijão ou 2 litros de leite longa vida.
                        </li>
                        <li>
                            <i><u>Aulas presenciais/noite : </i></u>Segunda a Sexta-feira
                        </li>
                        <li>
                            <i><u>Condições promocionais : </i></u>Até 50% Desconto para, Industriários* e dependentes*, Ex-alunos do SENAI-RS, transferidos, Diplomados e Reingressos. Conheça também o Desconto no Programa Fidelidade. *Funcionários de empresas contribuintes do Sistema Industria (SENAI/FIERGS).
                        </li>
                        <li>
                            <i><u>Inicio das Aulas : </i></u>05/06/2017 e 24/07/2017
                        </li>
                    </ul>
                    </p>




                    <p><a href="http://www.senairs.com.br/faculdade ">www.senairs.com.br/faculdade </a>
                    </p>
                   <!-- <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                        </li>
                    </ul>-->
                </div>
            </div>
        </section>
        <!-- Simulador Section -->
        <section  class="container content-section text-center">
            <div class="row" id="simulador">
                <div class="col-lg-6 col-lg-offset-1">

                    <div class="container text-center" >
                    <h2 >SIMULADOR DE DESCONTO</h2>
                        </div>

                    <div>
                        <table class="table table-bordered table-responsive" >
                            <tbody>
                            <tr>
                                <td>Tabela de Preços <br> Matriculas <?php date_default_timezone_set('UTC');
                                     echo date("Y")?></td>
                                <td>Valor Mensal Crédito</td>
                                <td>
                                    <?php
                                    require_once'../sga/dao/categoriaDAO.php';
                                    $categoriaDao = new categoriaDAO();
                                    $valorSemestral = $categoriaDao->vMensal();
                                    ?></td>
                                <td>Valor Mensal 20 Creditos</td>
                                <td>
                                    <?php
                                    require_once'../sga/dao/categoriaDAO.php';
                                    $categoriaDaoDao = new categoriaDAO();
                                    $totalCurso = $categoriaDao->vMensal_20();


                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Valor Semestral Créditos</td>
                                <td>
                                    <?php
                                    require_once'../sga/dao/categoriaDAO.php';
                                    $categoriaDao = new categoriaDAO();
                                    $valorSemestral = $categoriaDao->vSemestral();
                                    ?>
                                </td>
                                <td>Valor Semestral 20 Créditos</td>
                                <td>
                                    <?php
                                    require_once'../sga/dao/categoriaDAO.php';
                                    $categoriaDao = new categoriaDAO();
                                    $totalCurso = $categoriaDao->vSemestral_20();

                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>

                        </table>
                        <div <div class="col-lg-8 col-lg-offset-7">
                        <h5>Valores normais sem desconto</h5>
                            </div>
                            <div>
                        <table  class="table table-bordered table-responsive">
                            <tbody>
                            <tr>
                                <th>Casos</th>
                                <th>Créditos</th>
                                <th>Desconto</th>
                                <th>Val. Parc. de 1 a 6</th>
                                <th>Total Parc.</th>
                                <th>Desconto a vista ref. 6 parc.</th>
                                <th>Total a vista</th>
                                <th>Desc. R$ a vista</th>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                               <td>Valor Normal</td>
                                <td id="valor">4</td>
                                <td>0,00%</td>
                                <td id="valor1a6"><?php
                                    require_once '../sga/dao/descontoDAO.php';
                                    $descontoDao = new DescontoDAO();
                                    $desc1 = $descontoDao->vParcela1a6();

                                    echo "
                        <script>
                           function parcelas1a6() {
                                var qtdCredito = document.getElementById('valor').textContent;
                                var valor = $desc1;


                                document.getElementById('valor1a6').innerHTML = 'R$ ' + qtdCredito * valor;
                            }
                        </script>

                    ";

                                    ?></td>
                                <td id="tParcelado">
                                    <script>
                                        function tParcelado(){
                                            var parcelas1a6 = document.getElementById("valor1a6").textContent;
                                            var parcelas = parcelas1a6.replace("R$ ", "");
                                            var tParcelado = parcelas * 6;

                                            document.getElementById("tParcelado").innerHTML = "R$ " + tParcelado;
                                        }
                                    </script>
                                </td>
                                <td >6,0 %</td>
                                <td id="tAvista">
                                    <script>
                                        // $porc = tParcelado() * 6 / 100
                                        // $resultado = tParcelado - $porc
                                        function tAvista(){
                                            var porc = document.getElementById("tParcelado").textContent.replace("R$ ","") * 6 / 100;
                                            var resultado = document.getElementById("tParcelado").textContent.replace("R$ ","") - porc;

                                            document.getElementById("tAvista").innerHTML = "R$ " + resultado;
                                        }
                                    </script>

                                </td>
                                <td>6,0 %</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>

                        <div <div class="col-lg-8 col-lg-offset-7">
                        <h5>Valores com desconto</h5>
                            </div>
                    <div>
                    <table class="table table-bordered table-responsive">
                        <tbody>
                            <tr>
                                <td>Casos</td>
                                <th>Créditos</th>
                                <th>Desconto</th>
                                <th>Val. Parc.1 a 6</th>
                                <th>Total Parc.</th>
                                <th>Desconto a vista ref. 6 parc.</th>
                                <th>Total a vista</th>
                                <th>Desc. R$ a vista</th>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                    <?php
                                    require_once '../sga/dao/casoDAO.php';
                                    $casoDAO = new casoDAO();
                                    $caso = $casoDAO->visualizar();

                                    //  print_r($teste);
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    require_once '../sga/dao/creditoDAO.php>';
                                    $creditoDAO = new creditoDAO();
                                    echo "
                                 <script>
                                 function changeFunc() {
                                var selectBox = document.getElementById('selectBox');
                                var selectedValue = selectBox.options[selectBox.selectedIndex].value;

                                document.getElementById('valor').innerHTML = selectedValue;
}
                        </script>

                    ";
                                    $comboCredito = $creditoDAO->visualisar();
                                    //print_r($comboCredito);
                                    ?>
                                </td>
                                <td id="descontoS">
                                    <?php
                                    require_once 'dao/descontoDAO.php';
                                    require_once 'classes/credito.php';
                                    require_once 'classes/caso.php';

                                    $descontoDao = new DescontoDAO();



                                    $casoM = new Caso();
                                    $creditoM = new Credito();


                                    echo "
                                        <script>
                                            function desconto() {

                                                var selectBox2 = document.getElementById('caso');
                                                var caso = selectBox2.options[selectBox2.selectedIndex].value;

                                                var selectBox = document.getElementById('selectBox');
                                                var creditoval = selectBox.options[selectBox.selectedIndex].value;


                                                window.location.href='http://localhost/sga/principal.php?casoSelected=' + caso + '&creditoSelected=' + creditoval;

                                            }
                                        </script>
                                    ";

                                        if($_GET['casoSelected'] != '' ){


                                            //echo $creditoM->getIdCredito();
                                           if($_GET['creditoSelected'] != ''){
                                               $casoM->setIdCaso($_GET['casoSelected']);
                                               $creditoM->setIdCredito($_GET['creditoSelected']);
                                               $desconto = $descontoDao->getDesconto($casoM, $creditoM);
                                               echo $desconto->getDesconto1() . "%";
                                           }
                                            else{
                                                echo "0%";

                                            }

                                        }
                                        else{
                                            echo "0%";
                                        }










                                    ?>
                                </td>
                                <td id="ValParc1a6">
                                    <script>
                                        function valor1a6desc(){
                                            var val1a6Normal = document.getElementById("valor1a6").textContent.replace("R$ ", "");
                                            var desconto = parseInt(document.getElementById("descontoS").textContent.replace(/[^0-9]/g,"").replace("222",""));
                                            var resultado1 = (val1a6Normal * desconto) / 100;

                                            var resultado2 = val1a6Normal - resultado1;
                                            document.getElementById("ValParc1a6").innerHTML = "R$ " + resultado2;
                                        }
                                    </script>
                                </td>
                                <td id="totalParcS">
                                    <script>
                                        function totalParcS(){
                                            var valor1a6Desc = document.getElementById("ValParc1a6").textContent.replace("R$ ","") * 6;
                                            /*var conta = (123*1.23)+(312*3.26);
                                            var arredondado = parseFloat(conta.toFixed(2));

                                            console.log(conta); // 1168.4099999999999
                                            console.log(arredondado); //1168.41 */
                                            var valArredondado =valor1a6Desc.toFixed(2);
                                            document.getElementById("totalParcS").innerHTML = "R$ " + valArredondado;
                                        }
                                    </script>
                                </td>
                                <td id="porcentagemS">6,0 %</td>
                                <td id="totVistaS">
                                    <script>
                                        function totVistaS(){
                                            var totalParcelado = document.getElementById("tParcelado").textContent.replace("R$ ", "");
                                            var descTaVista = document.getElementById("descTaVista").textContent.replace("%","");
                                            var resultado1 = (totalParcelado * descTaVista) / 100;

                                            var resultado2 = (totalParcelado - resultado1).toFixed(2);
                                            document.getElementById("totVistaS").innerHTML = "R$ " + resultado2;
                                        }
                                    </script>
                                </td>
                                <td id="descTaVista">
                                    <script>
                                        function DesAvista(){
                                            var porcDesc = parseInt(document.getElementById("descontoS").textContent.replace(/[^0-9]/g,"").replace("222","")) + 6;
                                             document.getElementById("descTaVista").innerHTML =  porcDesc + "%";
                                        }
                                    </script>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                        </div>
                        <a onclick="desconto();" class="btn btn-default btn-lg ">Simular Desconto</a>

                        <a onclick="parcelas1a6(); tParcelado(); tAvista(); DesAvista(); valor1a6desc(); totalParcS(); totVistaS();" class="btn btn-default btn-lg">Simular A vista</a>
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
