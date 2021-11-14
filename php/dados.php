<?php 
	// Cria a conexão
	$conexao = new mysqli('localhost', 'db_arraiabem', 'root', 'usbw');

	// Checar conexão
	if (!$conexao) { // Se a conexão não acontecer, retorna erro e os demais procedimentos são cessados
		die("Amigo, cuidado com a depressão, mas... a conexão falhou; " . $conexao -> connect_error);

	} else {
		echo "Espera um pouco, tá dando ansiedade...";
		// Insira as informações no banco, now!
		// Depois redireciona pra uma página pra confirmar que deu tudo certo

	}

 ?>