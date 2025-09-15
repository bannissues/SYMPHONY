<?php 

// iniciar a sessão
session_start();
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

if ($username === '' || $password === '') {
	// Salva a mensagem de erro na sessão
	$_SESSION['login_error'] = 'Por favor, preencha o usuário e a senha.';
	// Redireciona de volta para a página de login
	header('Location: ../public/login.php');
	exit;
};
?>