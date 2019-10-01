<?php

include('includes/header.php');
include('includes/navbar.php');
?>

<br><br><br><br><br>

<form action="register.php" method="POST" class="login_form">
    <div>
        <input type="radio" name="posicao" value="usuario" id="usuario"> <label for="usuario">Usuário</label>
        <input type="radio" name="posicao" value="jogador" id="jogador"> <label for="jogador">Jogador</label>
        <input type="radio" name="posicao" value="olheiro" id="olheiro"> <label for="olheiro">Olheiro</label>
    <div>
    <input type="text" name="nome" id="" placeholder="Nome">
    <input type="password" name="senha" placeholder="Senha">
    <input type="password" name="rsenha" placeholder="Confirmação de Senha">
    <input type="text" name="email" id="" placeholder="Email">
    <button type="submit">Confirmar</button>
</form>

<?php
include('includes/footer.php');
?>