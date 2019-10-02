<?php 
//inicia sessão
session_start();
//chama a página de conexão
include('backend/connection.php');

//verifica se os campos estão vazios
if (empty($_POST['nome']) || empty($_POST['senha']) || empty($_POST['rsenha']) || empty($_POST['email'])) { 
    //se sim manda de volta para página de cadastro
    header('Location: registerfront.php');
}
else{
    msgfmt_get_error_message('Alguns dos campos estão vazios!');
    exit;
}
//verifica se uma das posições foi selecionada
if (isset($_POST['posicao'])) {
    //passa a posição selecionada e os outros dados
    $posicao = ( isset($_POST['posicao']) )  ? $_POST['posicao']  : null;
    $nome = mysqli_real_escape_string($connection, $_POST['nome']);
    $senha = mysqli_real_escape_string($connection, $_POST['senha']);
    $rsenha = mysqli_real_escape_string($connection, $_POST['rsenha']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);

    //verifica qual foi a posição selecionada
    if ($posicao == "usuario") {
        $categoria = 0;
    }else if($posicao == "jogador"){
        $categoria = 1;
    }else{
        $categoria = 2;
    }

    //verifica se as senhas combinam
    if($senha == $rsenha){
        //cadastro dos dados
        $query = "insert into `$posicao`(`nome`, `email`, `senha`, `categoria`) values('$nome','$email','$senha','$categoria')";
        $result = mysqli_query($connection, $query);
        //manda para página de login
        header('Location: loginfront.php');
        exit;
    }else{
        msgfmt_format_message('erro! senhas não combinam');
        exit;
    }
}
//manda mensagem de erro
else{
    msgfmt_format_message('Selecione uma posição!');
    exit;
}
?>