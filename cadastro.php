<?php 
//inicia sessão
session_start();
//chama a página de conexão
include('backend/connection.php');

//verifica se os campos estão vazios
// if (empty($_POST['nome']) || empty($_POST['senha']) || empty($_POST['rsenha']) || empty($_POST['email'])) { 
//     //se sim manda de volta para página de cadastro
//     header('Location: registerfront.php');
// }
//verifica se uma das posições foi selecionada


$nome = $_GET['nome_completo'];
$cpf = $_GET['CPF'];
$cidade = $_GET['cidade'];
$uf =  $_GET['uf'];
$telefone = $_GET['telefone'];
$data_nascimento = $_GET['data_nascimento'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$rsenha = $_GET['rsenha'];



    //verifica se as senhas combinam
    if($senha == $rsenha){
        //cadastro dos dados
        $query = "insert into jogadores (`nome_completo`, `CPF`, `cidade`, `uf`, `telefone`, `data_nascimento`, `email` ,`senha` ) values('{$nome}','{$cpf}','{$cidade}','{$uf}','{$telefone}','{$data_nascimento}','{$email}','{$senha}')";
        $result = mysqli_query($conexao, $query);

        //manda para página de login
        header('Location: usuario.php');
        exit;
    }else{
        msgfmt_format_message('erro! senhas não combinam');
        exit;
    }

//manda mensagem de erro
?>