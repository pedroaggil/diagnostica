<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comprovante</title>
	<link rel="stylesheet" type="text/css" href="../css/Estilo.css">
</head>
<body id="comprovante">

	<?php 

		if ($_SESSION['tipo']) {

			if ($_SESSION['tipo'][0]) {
				$_SESSION['tipo'][0] = 'Fixo';

			} elseif ($_SESSION['tipo'][1]) {
				$_SESSION['tipo'][1] = 'Celular';

			} elseif ($_SESSION['tipo'][2]) {
				$_SESSION['tipo'][2] = 'WhatsApp';

			}

		} else {
			echo "Tem parada errada ai, mermão.";

		}

		switch ($_COOKIE['morada']) {
			case 0:
				$_COOKIE['morada'] = 'Comprar';
				break;
			case 1:
				$_COOKIE['morada'] = 'Alugar por temporada';
				break;
			case 2:
				$_COOKIE['morada'] = 'Alugar para moradia';
				break;
			
			default:
				$_COOKIE['morada'] = null;
				break;
		}

		switch ($_COOKIE['desejo']) {
			case null:
				$_COOKIE['desejo'] = 'Tem coisa errada aí, amigo. Cuidado com as calças.';
				break;
			case 0:
				$_COOKIE['desejo'] = 'Casa';
				break;
			case 1:
				$_COOKIE['desejo'] = 'Sobrado';
				break;
			case 2:
				$_COOKIE['desejo'] = 'Apartamento';
				break;
			case 3:
				$_COOKIE['desejo'] = 'Terreno';
				break;
			case 4:
				$_COOKIE['desejo'] = 'Salão Comercial';
				break;
			
			default:
				echo "Calma lá meu parceiro, não é bem assim que a banda toca.";
				break;
		}

	?>

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