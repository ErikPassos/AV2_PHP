<?php

// Conecta ao BD
	$conexao = new mysqli( "localhost", "andrecos_unifacs", "unifacs123", "andrecos_unifacs" );
	
	// Erro na conexão?
	if ( $conexao->connect_error == true ) {
		
		echo $conexao->connect_error;
	
    }
    
    ?>