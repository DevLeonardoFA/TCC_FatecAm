<?php
    
    include('./backend/connection.php');


    $query = "select * from jogadores";

    $query_envia = mysqli_query( $conexao, $query) or die('Query failed: ' . mysql_error());




?>

