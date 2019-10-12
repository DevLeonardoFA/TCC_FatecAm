<?php   
    //inicia sessão
    session_start();
    //chama a página de conexão
    include('backend/connection.php');

    //passando id do usuario logado para $id
    $id = $_SESSION['id'];

    //query para o banco 
    $query = "Update 'status' = 0 from usuario where ID_U = '$id'";

    //conexão + query
    $result = mysqli_query($connection, $query);

    //executa a conexão e a query
    $dados = mysqli_fetch_assoc($result);
    header('Location: about.php');
    exit;
?>