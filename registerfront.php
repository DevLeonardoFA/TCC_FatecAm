<?php
    //conteúdo da pagina de registro
    include('includes/header.php');
    include('includes/navbar.php');
?>

<!--formulario de registro-->
<form action="register.php" method="POST" class="login_form">
    <div>
        <input type="radio" name="categoria" value="usuario" id="usuario"> <label for="usuario">Usuário</label>
        <input type="radio" name="categoria" value="jogador" id="jogador"> <label for="jogador">Jogador</label>
        <input type="radio" name="categoria" value="olheiro" id="olheiro"> <label for="olheiro">Olheiro</label>
    <div>
    <input type="text" name="nome" id="" placeholder="Nome">
    <input type="text" name="cpf" id="" placeholder="CPF">
    <input type="date" name="data_de_nascimento" id="">  
    <input type="password" name="senha" placeholder="Senha">
    <input type="password" name="rsenha" placeholder="Confirmação de Senha">
    <input type="email" name="email" id="" placeholder="Email">
    <button type="submit">Confirmar</button>
</form>

<?php
    include('includes/footer.php');
?>