<?php
session_start();

include_once 'db.php';

$id = $_SESSION['id'];

$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id='$id'");


$dado = mysqli_fetch_assoc($sql);


// Valor de cada dado

$nome= $dado['nome'];
$usuario = $dado['usuario'];
$email = $dado['email'];
$foto = $dado['foto'];

 

 ?>

 <?php 
	if((empty($usuario)) AND (empty($senha))){ //Previnindo acesso via URL
		$_SESSION['msg'] = "Página não encontrada";
		  header("Location: index.php");
	  
	  }
 
 
 
 ?>