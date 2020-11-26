<?php

        
    include('./backend/connection.php');


    $cod_usuario = $_SESSION['usuario']['cod_jogador'];

    if(isset($_GET['usuario'])){
        $cod = $_GET['usuario'];
        $query_usuario = "select * from jogadores where cod_jogador={$cod}";
        $usuario = mysqli_query( $conexao, $query_usuario ) or die('Query failed: ' . mysql_error());

        $query_videos = "select * from jogadores INNER JOIN videos on jogadores.cod_jogador = videos.fk_jogador where cod_jogador= {$cod}";
        $videos_usuario_admin = mysqli_query( $conexao, $query_videos) or die('Query failed: ' . mysql_error());
    }
    
    $query = "select * from jogadores where cod_jogador={$cod_usuario}";
    $query_videos = "select * from jogadores INNER JOIN videos on jogadores.cod_jogador = videos.fk_jogador where cod_jogador= {$cod_usuario}";

    $dados_usuario = mysqli_query( $conexao, $query) or die('Query failed: ' . mysql_error());
    $videos_usuario = mysqli_query( $conexao, $query_videos) or die('Query failed: ' . mysql_error());
    

?>