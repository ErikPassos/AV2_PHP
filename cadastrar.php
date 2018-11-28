<?php
session_start();
ob_start();

////Peagando os dados do formulario e colocando na variável
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);

//Verificando se o botão foi acionado e tem dados
if ($btnCadUsuario) {
  include_once 'db.php';
  
  //Pegando os dados do formulário
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  //var_dump($dados);
  
  //Gerar a senha criptografa
  $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
  
  /*$email = $dados['email'];

//Verificando se algo foi digitado:
if ($email>"1"){
$query = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email='$email'");
$numeros = mysqli_num_rows ($query);
header("Location: cadastrar.php");
}
//Fim
*/
   
  //inserindo dados no BD -> '" . $dados['nome'] . "' forma de inserir dados no BD dentro de um arraay
  $result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
					'" . $dados['nome'] . "',
					'" . $dados['email'] . "',
					'" . $dados['usuario'] . "',
					'" . $dados['senha'] . "'
          )";
          
 	//Pegando os dados do BD     
  $resultado_usario = mysqli_query($conexao, $result_usuario);

  if (mysqli_insert_id($conexao)) {
    $_SESSION['msgcad'] = "Usuário cadastrado com sucesso"; //Variável global 	$_SESSION['msgcad']
    header("Location: index.php");
  } else {
    $_SESSION['msg'] = "Erro ao cadastrar o usuário"; //Variável global 	$_SESSION['msg']
  }
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo/login.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastrar</title>
</head>
<body>
<form method="POST">
<div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Cadastrar</h5>
            <?php
            if (isset($_SESSION['msg'])) {
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
            ?>

            <form class="form-signin">

            <div class="form-label-group">
            
            <input type="text" id="inputName" name="nome" class="form-control" placeholder="Nome" required autofocus>
                <label for="inputEmail">Nome</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="email" required autofocus>
                <label for="inputEmail">Email</label>
              </div>

               <div class="form-label-group">
                <input type="text" id="inputEmail" name="usuario" class="form-control" placeholder="usuario" required autofocus>
                <label for="inputText">Usuário</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Senha</label>
              </div>

              
              <input type="submit" name="btnCadUsuario" class="btn btn-primary" value=
              "cadastrar">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</form>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>