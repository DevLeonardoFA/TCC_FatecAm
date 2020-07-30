<?php
include('connection.php');

if(isset($_GET['pesquisa'])){
    $cidade = $_GET['cidade'];
    $nome = $_GET['nome'];
    $estado = $_GET['uf'];
    $idade = $_GET['idade'];
    $posicao = $_GET['posicao'];
    
    $sql = array('nome, estado, cidade, idade, posicao');
    
    if ($nome != "") {
        $sql[0] = "nome_completo = '$nome',";
    }else{$sql[0] = "";}
    if ($estado != "") {
        $sql[1] = "uf = '$estado',";
    }else{$sql[1] = "";}
    if ($cidade != "") {
        $sql[2] = "cidade = '$cidade',";
    }else{$sql[2] = "";}
    if ($idade != "") {
        $sql[3] = "idade = '$idade',";
    }else{$sql[3] = "";}
    if ($posicao != "") {
        $sql[4] = "posicao = '$posicao'";
    }else{$sql[4] = "";}
    
    //comando do sql
    $query = "select nome from jogadores where $sql[0] $sql[1] $sql[2] $sql[3] $sql[4], video != NULL";
    
    //verificação
    $result = mysqli_query($connection, $query);

    //executa a conexão e a query
    $dados = mysqli_fetch_assoc($result);

    //verifica se o resultado retornou > 0
    $row = mysqli_num_rows($result);
}else{

    $query = 'select nome_completo, data_nascimento, cidade , uf , url_video from jogadores INNER JOIN videos on jogadores.cod_jogador = videos.fk_jogador';

    $result = mysqli_query($conexao, $query);

    
    //verifica se o resultado retornou > 0
    $row = mysqli_num_rows($result);

}



