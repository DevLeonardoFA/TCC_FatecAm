<?php

        
    include('./backend/connection.php');


    $cod_usuario = $_SESSION['usuario']['cod_jogador'];
    
    $query = "select * from jogadores where cod_jogador={$cod_usuario}";
    $query_videos = "select * from jogadores INNER JOIN videos on jogadores.cod_jogador = videos.fk_jogador where cod_jogador= {$cod_usuario}";

    $dados_usuario = mysqli_query( $conexao, $query) or die('Query failed: ' . mysql_error());
    $videos_usuario = mysqli_query( $conexao, $query_videos) or die('Query failed: ' . mysql_error());

?>