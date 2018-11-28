<?php
include_once 'db.php';
include_once 'dados.php';
error_reporting(0);

$fdata = mysqli_query($conexao, "SELECT * FROM posts ORDER BY id DESC");// pegando as publicações mais recentes
while ($f = mysqli_fetch_array($fdata)) {
 


// dados do usuario
  $id_usuario = $f['id'];
//var_dump($id_usuario);
  $user = mysqli_query($conexao, "SELECT * FROM usuario WHERE id='$id_usuario'");
//var_dump($id_usuario);
  $user_posts = mysqli_fetch_assoc($user);
//var_dump($user_posts);

  ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Celke - Reputacao com estrela</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="estilo.css">
	</head>
	



<div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
            

              <h6 class="w3-opacity"><?php if ($user_posts['nome'] == $nome) {
                                      echo "<b>você</b> publicou um status";
                                    } else {
                                      echo "<b>" . $nome . " " . $user_posts['data_posts'] . " </b> publicou um status ";
                                    } ?></h6>
              <p><?php echo $f['post']; ?></p>
              
              <?php
              if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'] . "<br><br>";
                unset($_SESSION['msg']);
              }
              ?>
                                  
              
              
              <form method="POST" action="processa.php" enctype="multipart/form-data">
			        <div class="estrelas">
			      	<input type="radio" id="vazio" name="estrela" value="" checked>
				
				      <label for="estrela_um"><i class="fa"></i></label>
				      <input type="radio" id="estrela_um" name="estrela" value="1">
				
				      <label for="estrela_dois"><i class="fa"></i></label>
				      <input type="radio" id="estrela_dois" name="estrela" value="2">
				
				      <label for="estrela_tres"><i class="fa"></i></label>
				      <input type="radio" id="estrela_tres" name="estrela" value="3">
				
				      <label for="estrela_quatro"><i class="fa"></i></label>
				      <input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				      <label for="estrela_cinco"><i class="fa"></i></label>
				      <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				    <input type="submit" value="Curtir">
				
			</div>
		</form>
    

             
            </div>
          </div>
        </div>
      </div><br><br>
 
     





<?php 
} ?>




<div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity"><?php if ($user_posts['nome'] == $nome) {
                                      echo "<b>você</b> publicou um status";
                                    } else {
                                      echo "<b>" . $nome . " </b> publicou um status ";
                                    } ?></h6>
              <p><input class="w3-input w3-border w3-hover-blue" type="text"><?php echo $f['post']; ?></p>
             
            </div>
          </div>
        </div>
      </div>

      </html>