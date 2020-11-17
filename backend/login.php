<?php
//inicia sessão
session_start();
//chama a pagina de conexão
include('connection.php');

//verifica se campo login e senha estão preenchidos
// if (empty($_GET['email']) || empty($_GET['senha'])) {
// 	//se estiverem vazios voltar para página de login
// 	header('Location: ../');
// 	exit();
// }

//passando o que está nos campos login e senha para as variáveis
$uEmail = $_GET['email'];
$uPass = $_GET['senha'];

//query para verificação
$query = "select * from jogadores where email = '{$uEmail}' and senha = '{$uPass}'";

//verificação
$result = mysqli_query($conexao, $query);

//executa a conexão e a query
$dados = mysqli_fetch_assoc($result);

//verifica se o resultado retornou 0/1
$row = mysqli_num_rows($result);


//se row for igual a 1 ele manda para página principal com login feito
if ($row == 1) {

		$data = implode("/",array_reverse(explode("-",$dados['data_nascimento'])));
		
		$_SESSION['usuario'] = array(
			'cod_jogador' => $dados['cod_jogador'],
			'CPF' => $dados['CPF'],
			'nome_completo' =>	$dados['nome_completo'],
			'data_nascimento' =>  $data,
			'altura' =>  $dados['altura'],
			'cidade' =>  $dados['cidade'],
			'posicao' =>  $dados['posicao'],
			'cep' =>  $dados['cep'],
			'cidade' =>  $dados['cidade'],
			'uf' =>  $dados['uf'],
			'telefone' =>  $dados['telefone'],
			'celular' =>  $dados['celular'],
			'peso' =>  $dados['peso'],
			'email' =>  $dados['email'],
			'img_perfil' => $dados['foto_perfil']
		);

		header('Location: ../main.php');
		exit();
}else{

	header('Location: ../login.php?retorn=0');
}
//se row for difernete... volta para pagina de login