<?php 
//inicia sessão( trás todos os dados que estão na camada de sessão)
session_start();
//termina sessão ( "deleta" todos os dados que estão na camada de sessão)
session_destroy();
//manda de volta para tel index.php
header('location: ../login.php');

?>