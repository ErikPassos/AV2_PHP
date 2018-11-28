<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="estilo/login.css">
    	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>

	
	<body>
	<div class="row">
	<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="card card-signin my-5">
    <div class="card-body">
	<h5 class="card-title text-center">Entrar</h5>
		<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	if (isset($_SESSION['msgcad'])) {
		echo $_SESSION['msgcad'];
		unset($_SESSION['msgcad']);
	}
	?>
		<form class="form-signin" method="POST" action="valida.php">
		<div class="form-label-group">
                <input type="text" id="inputEmail" name="usuario" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Usuário</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Senha</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Lembrar Senha</label>
              </div>
              <input class="btn btn-lg btn-primary btn-block text-uppercase" name="btnLogin" type="submit" value="Entrar">

              <br><br>
              
              <h3>Cadastre-se agora!</h3>
              <button type="button" class="btn btn-dark" ><a href="cadastrar.php">Cadastrar</a></button>
		
		</form>
		
	</div>
	</div>
	</div>
	</div>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>