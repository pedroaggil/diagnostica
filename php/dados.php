<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Nos Informe</title>
</head>
<body>

<?php 
	// Cria a conexão
	$conexao = new mysqli('localhost', 'root', 'usbw', 'db_arraiabem');

	// Checar conexão
	if (!$conexao) { // Se a conexão não acontecer, retorna erro e os demais procedimentos são cessados
		die("Amigo, cuidado com a depressão, mas... a conexão falhou; " . $conexao -> connect_error);

	} else {
		echo "Espera um pouco, tá dando ansiedade...";
		
		$insert = 'INSERT INTO tb_usuario VALUES ($nome, $email, $ddd, $telefone, $senha, $tipotel, $morada, $desejo)';

		if ($mysqli->query($insert)) {
			header("Location: confirmação.html");

		} else {
			echo "Calma lá meu patrão, deu problema aí! " . $mysqli->error;

		}
	}

 ?>

</body>
</html>