<?php
include_once ("db.php");
include_once ("dados.php");

error_log(1);

  if ($_POST !=NULL) {
    $post=$_POST["post"];
    $hoje= date("Y-m-d");
    $autor= $_SESSION["id"];

    $sql= "INSERT INTO posts (post,data_post, cod_autor) VALUES('$post','$hoje', '$autor')";
    $retorno = $conexao->query( $sql );
    // Executou?
	if ( $retorno == true ) {
		
	// Deu erro..
	} else {

		echo "<script>
				alert('ERROOOO!!!!');
			  </script>";
		
		echo $conexao->error;
		
	}
	
      
    }
  
  

?>