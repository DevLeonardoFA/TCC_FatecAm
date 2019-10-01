<?php 

session_start();
include('backend/connection.php');

if (empty($_POST['nome']) || empty($_POST['senha']) || empty($_POST['rsenha']) || empty($_POST['email'])) { 
    header('Location: registerfront.php');
}



if (isset($_POST['posicao'])) {
    $posicao = ( isset($_POST['posicao']) )  ? $_POST['posicao']  : null;
    $nome = mysqli_real_escape_string($connection, $_POST['nome']);
    $senha = mysqli_real_escape_string($connection, $_POST['senha']);
    $rsenha = mysqli_real_escape_string($connection, $_POST['rsenha']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);

    
    if ($posicao == "usuario") {
        $categoria = 0;
    }else if($posicao == "jogador"){
        $categoria = 1;
    }else{
        $categoria = 2;
    }


    if($senha == $rsenha){
        //validações   
        $query = "insert into `$posicao`(`nome`, `email`, `senha`, `categoria`) values('$nome','$email','$senha','$categoria')";
        $result = mysqli_query($connection, $query);
        header('Location: loginfront.php');
        exit;
    }
}
else{
    msgfmt_format_message('erro!');
    exit;
}

echo $posicao;

?>