<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comprovante</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body id="comprovante">

	<div class="exibir">
		<p>Nome: <?php echo $_COOKIE['nome']; ?></p>
		<p>E-mail: <?php echo $_COOKIE['email']; ?></p>

		<p>Telefone: <?php echo $_COOKIE['ddd']; echo ' ' . $_COOKIE['telefone'] ?></p>
		<p>Tipo de telefone: <?php foreach ($_SESSION['tipo'] as $key => $tipoloop) { echo $tipoloop . ' '; } ?></p>

		<p>Desejo de compra: <?php echo $_COOKIE['desejo']; ?></p>
		<p>Tipo de moradia: <?php echo $_COOKIE['morada']; ?></p>
	</div>

	<form display="inline-block" action="dados.php" method="post">
		<input type="submit" id="confirmar">
		<button id="corrigir"><a href="corrigir.php">Corrigir</a></button>
	</form>

</body>
</html>