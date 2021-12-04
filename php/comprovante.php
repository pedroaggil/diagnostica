<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comprovante</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body id="comprovante">
<div class="box">
	<h1>Locadora</h1>
	<p class="subtitulo">Tarefa diagnóstica de Programação Web I</p>

	<div class="exibir">
		<p><span>Nome</span>: <?php echo $_COOKIE['nome']; ?></p>
		<p><span>E-mail</span>: <?php echo $_COOKIE['email']; ?></p>

		<p><span>Telefone</span>: <?php echo $_COOKIE['ddd']; echo ' ' . $_COOKIE['telefone'] ?></p>
		<p><span>Tipo de telefone</span>: <?php foreach ($_SESSION['tipo'] as $key => $tipoloop) { echo $tipoloop . ' '; } ?></p>

		<p><span>Desejo de compra</span>: <?php echo $_COOKIE['desejo']; ?></p>
		<p><span>Tipo de moradia</span>: <?php echo $_COOKIE['morada']; ?></p>
	</div>

	<form display="inline-block" action="dados.php" method="post">
		<input type="submit" id="confirmar">
		<button id="corrigir"><a href="corrigir.php">Corrigir</a></button>
	</form>
</div>
	<footer>
		<p>&copy; 2021 · Pedro Gil & Anderson Muniz</p>
	</footer>
</body>
</html>