<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Nos Informe</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body id="correcao">
	<main>
		<form action="form.php" method="post">
			<div class="texto">
			<input type="text" name="nome" value="<?php echo $_COOKIE['nome']; ?>" required><br>
			<div id="login" display="inline-block">
				<input type="email" name="email" value="<?php echo $_COOKIE['email']; ?>" required>
				<input type="password" name="senha" value="" required>
			</div>
			<div id="telefone" display="inline-block">
				<input type="number" name="ddd" value="<?php echo $_COOKIE['ddd']; ?>" min="0" max="999" required>
				<input type="tel" name="telefone" value="<?php echo $_COOKIE['telefone']; ?>" required>
			</div>
			</div>
			<div class="botoes">
				<div id="tipo" display="inline-block">
					<input type="checkbox" name="tipo[]" value="Fixo" id="fixo"> Fixo
					<input type="checkbox" name="tipo[]" value="Celular" id="cel"> Celular
					<input type="checkbox" name="tipo[]" value="WhatsApp" id="wpp"> WhatsApp
				</div>
				<div id="desejo" display="inline-block">
					<input type="radio" name="desejo" value="Compra integral" id="comprar" checked>
					<label for="comprar">Comprar</label>

					<input type="radio" name="desejo" value="Aluguel por temporada" id="alugT">
					<label for="alugt">Alugar por temporada</label>

					<input type="radio" name="desejo" value="Alugar por tempo indefinido" id="alugD">
					<label for="alugd">Alugar para moradia</label>
				</div>
				<select name="morada" required>
					<option value="null">...</option>
					<option value="Casa">Casa</option>
					<option value="Sobrado">Sobrado</option>
					<option value="Apartamento">Apartamento</option>
					<option value="Terreno">Terreno</option>
					<option value="Salão Comercial">Salão Comercial</option>
				</select>
			</div>
			<div class="fim">
				<input type="submit" value="Gravar"></input>
				<input type="reset" value="Limpar"></input>
			</div>
		</form>
	</main>
</body>
</html>