
<?php 

//conteúdo da página home
include('backend/connection.php');
include('backend/verificacao.php');
include('includes/header.php'); 
include('includes/sidebar.php');



//definindo numero de itens visiveis na tela
$itens_por_pagina = 1;

$data = implode("-",array_reverse(explode("/",$_SESSION['usuario']['data_nascimento'])));

?>  

<main class="pagina_dados">
    
    <form action="backend/update.php" method="GET">
        <label for="">
        E-mail:
        <input type="email" name="email" id="" placeholder="Email" value="<?php echo $_SESSION['usuario']['email']; ?>"></label>
        <label for="">
        Nome Completo:
        <input type="text" name="nome_completo" id="" placeholder="Nome Completo" value="<?php echo $_SESSION['usuario']['nome_completo']; ?>"></label>
        <label for="">
        Data de nascimento:
        <input type="date" name="data_nascimento" value="<?php echo $data ?>">  </label>
        <label for="">
        CPF:
        <input type="number" name="CPF" id=""  value="<?php echo $_SESSION['usuario']['CPF']; ?>"></label>
        <label for="">
        Peso:
        <input type="text" name="peso" id=""  value="<?php echo $_SESSION['usuario']['peso']; ?>"></label>
        <label for="">
        Altura(cm):
        <input type="number" name="altura" id=""  value="<?php echo $_SESSION['usuario']['altura']; ?>"></label>
        <label for="">
        Posição:
        <select name="posicao" >
            <option value="">Selecione a Posição</option>
            <option <?php if($_SESSION['usuario']['posicao'] == 'Goleiro'){ echo 'selected'; }?> value="Goleiro">Goleiro</option>
            <option <?php if($_SESSION['usuario']['posicao'] == 'Meio-campo'){ echo 'selected'; }?> value="Meio-campo">Meio-Campo</option>
            <option <?php if($_SESSION['usuario']['posicao'] == 'Meio-atacante'){ echo 'selected'; }?> value="Meio-atacante">Meio-Atacante</option>
            <option <?php if($_SESSION['usuario']['posicao'] == 'Atacante'){ echo 'selected'; }?> value="Atacante">Atacante</option>
            <option <?php if($_SESSION['usuario']['posicao'] == 'Centroavante'){ echo 'selected'; }?> value="Centroavante">Centroavante</option>
            <option <?php if($_SESSION['usuario']['posicao'] == 'Zagueiro'){ echo 'selected'; }?> value="Zagueiro">Zagueiro</option>
            <option <?php if($_SESSION['usuario']['posicao'] == 'Volante'){ echo 'selected'; }?> value="Volante">Volante</option>
            <option <?php if($_SESSION['usuario']['posicao'] == 'Lateral Direito'){ echo 'selected'; }?> value="Lateral Direito">Lateral Direito</option>
            <option <?php if($_SESSION['usuario']['posicao'] == 'Lateral Esquerdo'){ echo 'selected'; }?> value="Lateral Esquerdo">Lateral Esquerdo</option>
        </select>
        
        </label>
        <label for=""><input type="text" name="cep" placeholder="CEP" value="<?php echo $_SESSION['usuario']['cep']; ?>"></label>
        <label for=""><input type="text" name="cidade" placeholder="Cidade" value="<?php echo $_SESSION['usuario']['cidade']; ?>"></label>
        <label for=""><input type="text" name="uf" placeholder="UF" value="<?php echo $_SESSION['usuario']['uf']; ?>"></label>
        <label for=""><input type="text" name="telefone" placeholder="Telefone fixo" value="<?php echo $_SESSION['usuario']['telefone']; ?>"></label>
        <label for=""><input type="text" name="celular" placeholder="Telefone Celular" value="<?php echo $_SESSION['usuario']['celular']; ?>"></label>
        

        <button type="submit">Atualizar dados</button>
    </form>

    <form action="backend/update.php" method="GET">
        <label for="">iframe do video:
            <input type="text" name="url_video">
        </label>
        <button type="submit">Adicionar video</button>
    </form>
</main>


<?php include('includes/footer.php'); ?>