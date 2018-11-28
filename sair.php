<?php

session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);// destruir a sessão

$_SESSION['msg'] = "Deslogado com sucesso";
header("Location: index.php");// redirecionar a página