<?php
    //inicia sessão
    session_start();
    //verifica se existe logado na sessão
    if(!isset($_SESSION['usuario'])){
        //caso não exista direciona para index.php
        header("Location:index.php");
    }
    //caso tenha ignora tudo
?>