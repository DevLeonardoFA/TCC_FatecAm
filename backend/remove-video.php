<?php

    include('connection.php');

    $cod_video = $_GET['cod_video'];

    $query = "DELETE FROM videos WHERE cod_video={$cod_video}";

    $dados_usuario = mysqli_query( $conexao, $query) or die('Query failed: ' . mysql_error());

    if(isset($_GET['admin'])){
        $cod_usu = $_GET['admin'];
        header('Location: ./../admin-usuario.php?usuario='.$cod_usu.'');
    }else{
        header('Location: ./../meus-videos.php');
    }

?>