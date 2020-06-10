<?php
    //verifica se existe uma foto
    if(!isset($_SESSION['photo'])){
        //caso não tenha mostrar uma padrão
        echo("./images/user-defaut.png");
    }else{
        //caso tenha mostar a foto salva
        echo($_SESSION['photo']);
    }

?>