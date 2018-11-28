<?php
session_start();// iniciando a sessão
include_once("db.php"); // incluindo o BD

//Peagando os dados do formulario e colocando na variável
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);


//Verificando se o botão foi acionado e tem dados
if($btnLogin){
	
	//Pegando dados do formulário
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	

	//Se a varável diferente de vazio -> Pesquise no BD -> Pegue os dados -> Compare com os digitados-> Se True rediricone -> Senão exiba a "msg"
	if((!empty($usuario)) AND (!empty($senha))){
		
		
		$result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
		
		//Pegando os dados do BD
		$resultado_usuario = mysqli_query($conexao, $result_usuario);
		
		//Se tiver dados na variavel
		if($resultado_usuario){
			//Extraindo dados da variável, linha por linha - variavel global $_SESSION "digitado pelo usuário" e comparando com o registrado no BD
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){ //Verifica se a senha "digitada pelo usuário" é igual a registrada no BD
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: profile.php"); // Se TRUE, redireciona para a página profile
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: index.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: index.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: index.php");
}
