<?php 
include('backend/connection.php');
$tipo_function = $_GET['info'];


switch ($tipo_function) {
    case 'login':
        Login();
        break;
    case 'cadastrar':
        cadastrar();
        break;
    case 'pesquisa':
        updateUsuario();
        break;
    case 'pesquisa':
        cadastrarVideo();
        break;
    case 'pesquisar':
        pesquisar();
        break;
    case 'listar':
        listarVideos();
        break;
}

function login(){
    echo "teste";
}

function cadastrar(){

}

function updateUsuario(){

}

function cadastrarVideo(){

}

function pesquisar(){

}

function listar(){

}

?>

