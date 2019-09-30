<?php
//host
define('HOST', 'localhost');
//usuario do DB
define('USUARIO', 'root');
//senha do DB
define('SENHA', '');
//DB
define('DB', 'Tcc');

$connection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('erro ao conectar');