<?php 
	/*	
		Salva todas as informações e manda para a página que vai exibir tudo para o usuário; nessa página, se o usuário confirmar as informações elas serão armazenadas definitivamente (no banco de dados, após conexão feita em sequência à ação confirmatória) e, caso não o faça, será redirecionado para uma outra página para que corrija as informações erradas.
	*/

	session_start();

	// Armazena as informações do formulário em variáveis
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$ddd = $_POST['ddd'];
	$telefone = $_POST['telefone'];
	$tipotel = $_POST['tipo'];
	$desejo = $_POST['desejo'];
	$morada = $_POST['morada'];

	// Guarda as informações do formulário em cookies
	setcookie('nome', $nome, time() + (60 * 60 * 24 * 30));
	setcookie('email', $email, time() + (60 * 60 * 24 * 30));
	setcookie('senha', $senha, time() + (60 * 60 * 24 * 30));
	setcookie('ddd', $ddd, time() + (60 * 60 * 24 * 30));
	setcookie('telefone', $telefone, time() + (60 * 60 * 24 * 30));
	setcookie('desejo', $desejo, time() + (60 * 60 * 24 * 30));
	setcookie('morada', $morada, time() + (60 * 60 * 24 * 30));	

	// Guarda essa informação em uma sessão (porque é um array)
	$_SESSION['tipo'] = $tipotel;

	// Redireciona para outra página
	header('Location: comprovante.php');

 ?>