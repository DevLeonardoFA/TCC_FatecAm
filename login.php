<?php
session_start();
include('backend/connection.php');

if (empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: loginfront.php');
	exit();
}

//passando o que está nos campos userField e passField
$uName = mysqli_real_escape_string($connection, $_POST['login']);
$uPass = mysqli_real_escape_string($connection, $_POST['senha']);

//query para verificação
$query = "select * from jogador, usuario, olheiro where email = '$uName' and senha = '$uPass'";

//verificação
$result = mysqli_query($connection, $query);

$dados = mysqli_fetch_assoc($result);

//resultado boolean
$row = mysqli_num_rows($result);

//se row for igual a 1 ele manda para página principal com login feito
if ($row == 1) {
	//switch($dados['posicao'])
			$_SESSION['posicao'] = $dados['posicao'];
			$_SESSION['nome'] = $dados['nome'];
			//$_SESSION['sessao'] = $dados['sessao'];
			//$_SESSION['photo'] = $dados['photo'];
			header('Location: home.php');
			exit();
	//}
}
//se row for difernete... volta para pagina de login
else{
	header('Location: loginfront.php');
	exit();
}