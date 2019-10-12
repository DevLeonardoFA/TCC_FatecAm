<?php
//inicia sessão
session_start();
//chama a pagina de conexão
include('backend/connection.php');

$cidade = null;

$nome = $_POST['nome'];
$estado = $_POST['uf'];
//$cidade = $_POST['cidade'];
$idade = $_POST['idade'];
$posicao = $_POST['posicao'];

$sql = array('nome, estado, cidade, idade, posicao');

if ($nome != "") {
    $sql[0] = "nome = '$nome',";
}else{$sql[0] = "";}
if ($estado != "") {
    $sql[1] = "estado = '$estado',";
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
$query = "select nome from usuario where $sql[0] $sql[1] $sql[2] $sql[3] $sql[4], video != NULL";

//verificação
$result = mysqli_query($connection, $query);

//executa a conexão e a query
$dados = mysqli_fetch_assoc($result);

//verifica se o resultado retornou > 0
$row = mysqli_num_rows($result);


var_dump($row);

