<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Nos Informe</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body id="info">
	<div class="container">
		<div class="box">
			<form action="form.php" method="post" id="formulario">
				<div class="texto">
					<input type="text" name="nome" value="<?php echo $_COOKIE['nome']; ?>" placeholder="Nome" required><br>
				</div>
				<div id="login" display="inline-block">
					<input type="email" name="email" value="<?php echo $_COOKIE['email']; ?>" placeholder="E-mail" required>
					<input type="password" name="senha" placeholder="Senha" required>
				</div>
				<div id="telefone" display="inline-block">
					<input type="number" name="ddd" value="<?php echo $_COOKIE['ddd']; ?>" placeholder="DDD" min="0" max="999" required>
					<input type="tel" name="telefone" value="<?php echo $_COOKIE['telefone']; ?>" placeholder="Telefone" required>
				</div>
				<div id="tipo" display="inline-block">
					<input type="checkbox" name="tipo[]" value="0" id="fixo"> Fixo
					<input type="checkbox" name="tipo[]" value="1" id="cel"> Celular
					<input type="checkbox" name="tipo[]" value="2" id="wpp"> WhatsApp
				</div>
				<div id="desejo" display="inline-block">
					<input type="radio" name="desejo" value="0" id="comprar" checked>
					<label for="comprar">Comprar</label>
	
					<input type="radio" name="desejo" value="1" id="alugT">
					<label for="alugt">Alugar por temporada</label>

					<input type="radio" name="desejo" value="2" id="alugD">
					<label for="alugd">Alugar para moradia</label>
				</div>
				<div>
					<select name="morada" required>
						<option value="null">...</option>
						<option value="0">Casa</option>
						<option value="1">Sobrado</option>
						<option value="2">Apartamento</option>
						<option value="3">Terreno</option>
						<option value="4">Salão Comercial</option>
					</select>
				</div>
				<div class="fim">
					<input type="submit" value="Gravar"></input>
					<input type="reset" value="Limpar"></input>
				</div>
			</form>
		</div>
	</div>
</body>
</html>