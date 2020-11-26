<?php
    include('./connection.php');
    include('verificacao_logado.php');



    $cod_usuario = $_GET['cod_usuario']; //identificando o usuario que sera alterado

    $query = "select * from jogadores where cod_jogador={$cod_usuario}";

    $dados_usuario = mysqli_query( $conexao, $query) or die('Query failed: ' . mysql_error());

    $user = mysqli_fetch_assoc($dados_usuario);




    $senha_antiga = $_GET['senha_antiga'];
    $nova_senha = $_GET['nova_senha'];
    $confirm_senha = $_GET['confirm_senha'];

    if( $user['senha'] == $senha_antiga ){
        
        if($nova_senha == $confirm_senha){
            $query_senha = "UPDATE jogadores SET senha = '{$nova_senha}' WHERE cod_jogador = {$cod_usuario}";

            if(mysqli_query( $conexao, $query_senha) ){
                header('Location: ./../configuracoes.php?info_senha=1');                       
            }else{
                header('Location: ./../configuracoes.php?info_senha=2');
            }
        }else{
            echo "Senhas diferentes";
        }

    }else{
        header('Location: ./../configuracoes.php?info_senha=3');
    }





?>