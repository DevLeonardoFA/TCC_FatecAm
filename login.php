<?php
//inicia sessão
session_start();
//chama a pagina de conexão
include('backend/connection.php');

//verifica se campo login e senha estão preenchidos
if (empty($_POST['login']) || empty($_POST['senha'])) {
	//se estiverem vazios voltar para página de login
	header('Location: loginfront.php');
	exit();
}

//passando o que está nos campos login e senha para as variáveis
$uName = mysqli_real_escape_string($connection, $_POST['login']);
$uPass = mysqli_real_escape_string($connection, $_POST['senha']);

//identifica a posição escolhida
$categoria = $_POST['categoria'];

//query para verificação
$query = "select * from usuario where email = '$uName' and senha = '$uPass'";

//verificação
$result = mysqli_query($connection, $query);

//executa a conexão e a query
$dados = mysqli_fetch_assoc($result);

//verifica se o resultado retornou 0/1
$row = mysqli_num_rows($result);


//se row for igual a 1 ele manda para página principal com login feito
if ($row == 1) {
		$_SESSION['id'] = $dados['ID_U'];
		$_SESSION['nome'] = $dados['nome'];
		$_SESSION['idade'] = $dados['idade'];
		$_SESSION['altura'] = $dados['altura'];
		$_SESSION['cidade'] = $dados['cidade'];
		$_SESSION['estado'] = $dados['estado'];
		$_SESSION['posicao'] = $dados['posicao'];
		$_SESSION['peso'] = $dados['peso'];
		$_SESSION['pe'] = $dados['pe'];
		$_SESSION['email'] = $dados['email'];
		$_SESSION['logado'] = 'on';
		$_SESSION['categoria'] = $dados['categoria'];
		$_SESSION['video'] = $dados['video'];
		//$_SESSION['sessao'] = $dados['sessao'];
		//$_SESSION['photo'] = $dados['photo'];
		header('Location: home.php?pagina=0');
		exit();
}else{
}
//se row for difernete... volta para pagina de login