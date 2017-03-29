<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X=UA-Compatible" content="IE-edge">
<title>Login</title>
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
  <div class="cabecalho">
  </div>
  <form action="principal.php" method="post" accept-charset="utf-8" class="form-login">
    <h2 class="form-login-heading text-center">Acesso</h2>
    <label for="inputUsuario" class="sr-only">Usuário</label>
    <input type="usuario" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
    <label for="senha" class="sr-only">Senha</label>
    <input type="password" id="inputSenha" class="form-control" placeholder="Senha" required>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
    <footer padding-top:60px>

</footer>
</body>
</html>
