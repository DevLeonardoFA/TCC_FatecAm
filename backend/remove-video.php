<?php

    include('connection.php');

    $cod_video = $_GET['cod_video'];

    $query = "DELETE FROM videos WHERE cod_video={$cod_video}";

    $dados_usuario = mysqli_query( $conexao, $query) or die('Query failed: ' . mysql_error());

    header('Location: ./../meus-videos.php');
?>