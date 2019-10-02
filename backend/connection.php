<?php
//host
define('HOST', 'localhost');
//usuario do DB
define('USUARIO', 'root');
//senha do DB
define('SENHA', '');
//DB
define('DB', 'Tcc');

//fazendo a conexão, passando os dados e caso de erro uma mensagem
$connection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('erro ao conectar');