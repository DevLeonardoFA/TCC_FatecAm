<?php
include('connection.php');


$max_videos = "6";

if(isset($_GET['pagina'])){
    $page = $_GET['pagina'];
}else{
    $page = 1;
}

$inicio_pagination = $page - 1;
$inicio_pagination = $inicio_pagination * $max_videos;

if(isset($_GET['pesquisa'])){

    $cidade = $_GET['cidade'];
    $nome = $_GET['nome'];
    $estado = $_GET['uf'];
    $ano_nascimento = $_GET['ano'];
    $posicao = $_GET['posicao'];
    
    $sql = array();

    if ($nome != "") {
        array_push($sql, "nome_completo = '$nome'");
    }

    if ($estado != "") {
        array_push($sql, "uf = '$estado'");
    }

    if ($cidade != "") {
        array_push($sql, "cidade = '$cidade'");
    }
    
    if ($ano_nascimento != "") {
        array_push($sql, "ano = '$ano_nascimento'");
    }
    if ($posicao != "") {
        array_push($sql, "posicao = '$posicao'");
    }
    
    $parametros = '';

    $ind = 0;

    // Jogando os parametros dentro de uma string que sera usado na Query
    foreach ($sql as $value) {
        if($ind == 0){
            $parametros = $parametros.$value;
        }else{
            $parametros = $parametros.' AND '.$value;
        }
        $ind++;
    }

    //comando do sql
    $query = "select * from  jogadores INNER JOIN videos on jogadores.cod_jogador = videos.fk_jogador where {$parametros}";


    $query_todos = "select * from  jogadores INNER JOIN videos on jogadores.cod_jogador = videos.fk_jogador where {$parametros}";

    $query = "select * from  jogadores INNER JOIN videos on jogadores.cod_jogador = videos.fk_jogador where {$parametros} LIMIT $inicio_pagination, $max_videos";

    $result_todos = mysqli_query($conexao, $query_todos);
    $result = mysqli_query($conexao, $query);

    //verifica se o resultado retornou > 0
    if($result){
        $row = mysqli_num_rows($result);
    }else{
        echo "Erro ao buscar video";
    }

}else{
    
    $query_todos = "select * from jogadores INNER JOIN videos on jogadores.cod_jogador = videos.fk_jogador";

    $query = "select * from jogadores INNER JOIN videos on jogadores.cod_jogador = videos.fk_jogador LIMIT $inicio_pagination, $max_videos";

    $result_todos = mysqli_query($conexao, $query_todos);
    $result = mysqli_query($conexao, $query);

    //verifica se o resultado retornou > 0
    if($result){
        $row = mysqli_num_rows($result);
    }else{
        echo "Erro ao buscar video";
    }
}

