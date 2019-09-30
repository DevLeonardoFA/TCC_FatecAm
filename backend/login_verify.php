<?php
session_start();

//se estiver tentando burlar volta para tela de login
if (!$_SESSION['userField']) {
	header('Location: loginfront.php');
	exit();
}