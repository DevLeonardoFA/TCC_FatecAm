<?php 
    //inicia sessão
    session_start();
    //chama a página de conexão
    include('backend/connection.php');

    //verificação se todos os campos estão vazios
    if (empty($_POST['nome']) || empty($_POST['telefone']) || empty($_POST['categoria']) || empty($_POST['estados-brasil'])){
        //erro
        exit;
        header('Location: about.php');
    } else {
        //atribuindo valor dos campos para as variaveis
        $nome = mysqli_real_escape_string($connection, $_POST['nome']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $categoria = mysqli_real_escape_string($connection, $_POST['categoria']);
        $estado = mysqli_real_escape_string($connection, $_POST['uf']);
        

        //pegando o ID e atribuindo para a variavel id
        $id = ($_SESSION['ID_U']);

        $categoria = $_SESSION['categoria'];

        //query para o banco 
        $query = "update usuario set nome`= '$nome',`email`='$email', where '$id'";

        //conexão + query
        $result = mysqli_query($connection, $query);

        //executa a conexão e a query
        $dados = mysqli_fetch_assoc($result);
        header('Location: about.php');
        exit;
    }
    

?>