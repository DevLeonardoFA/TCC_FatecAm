<?php 
    //inicia sessão
    session_start();
    //chama a página de conexão
    include('backend/connection.php');

    //verificação se todos os campos estão vazios
    if (empty($_POST['nome']) || empty($_POST['telefone']) || empty($_POST['posicao']) || empty($_POST['estados-brasil'])){
        //erro
        exit;
        header('Location: about.php');
    } else {
        //atribuindo valor dos campos para as variaveis
        $nome = mysqli_real_escape_string($connection, $_POST['nome']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $posicao = mysqli_real_escape_string($connection, $_POST['posicao']);
        $estado = mysqli_real_escape_string($connection, $_POST['estado']);

        //pegando o ID e atribuindo para a variavel id
        $id = ($_SESSION['ID_U']);

        //query para o banco 
        $query = "update `usuario` set nome`= '$nome',`email`='$email', where '$id'";

        //conexão + query
        $result = mysqli_query($connection, $query);

        //executa a conexão e a query
        $dados = mysqli_fetch_assoc($result);
        header('Location: about.php');
        exit;
    }
    

?>