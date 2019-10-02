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
$posicao = (isset($_POST['posicao'])) ? $_POST['posicao']  : null;

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
	//passando dados do banco para campos da sessão
			$_SESSION['id'] = $dados['ID_U'];
			$_SESSION['categoria'] = $dados['categoria'];
			$_SESSION['nome'] = $dados['nome'];
			$_SESSION['logado'] = 'on';
			//$_SESSION['sessao'] = $dados['sessao'];
			//$_SESSION['photo'] = $dados['photo'];
			header('Location: home.php');
			exit();
}
//se row for difernete... volta para pagina de login