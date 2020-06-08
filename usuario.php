
<?php 

//conteúdo da página home
include('backend/connection.php');
include('backend/verificacao_logado.php');
include('includes/header.php'); 
include('includes/sidebar.php');


//definindo numero de itens visiveis na tela
$itens_por_pagina = 1;

?>  
            
<form action="register.php" method="GET">
    <input type="text" name="nome_completo" id="" placeholder="Nome Completo">
    <input type="text" name="CPF" id="" placeholder="CPF">
    <input type="text" name="peso" id="" placeholder="Peso">
    <input type="text" name="altura" id="" placeholder="Altura em cm">

    <select name="posicao">
        <option value="">Selecione a Posição</option>
        <option value="Goleiro">Goleiro</option>
        <option value="Meio-campo">Meio-Campo</option>
        <option value="Meio-Atacante">Meio-Atacante</option>
        <option value="Atacante">Atacante</option>
        <option value="Centroavante">Centroavante</option>
        <option value="Zagueiro">Zagueiro</option>
        <option value="Volante">Volante</option>
        <option value="Lateral Direito">Lateral Direito</option>
        <option value="Lateral Esquerdo">Lateral Esquerdo</option>
    </select>
    
    <input type="text" name="cep" placeholder="CEP">
    <input type="text" name="cidade" placeholder="Cidade">
    <input type="text" name="uf" placeholder="UF">
    <input type="text" name="telefone" placeholder="Telefone fixo">
    <input type="text" name="celular" placeholder="Telefone Celular">
    <input type="date" name="data_nascimento" >  


    <input type="password" name="senha" placeholder="Senha">
    <input type="password" name="rsenha" placeholder="Confirmação de Senha">
    <input type="email" name="email" id="" placeholder="Email">
    <button type="submit">Confirmar</button>
</form>


<?php include('includes/footer.php'); ?>