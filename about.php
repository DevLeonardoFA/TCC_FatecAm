<?php

//conteúdo da página sobre

    include('backend/verificacao.php');
    include('includes/header.php');
    include('includes/sidebar.php'); 
    ?>

<div class="container">
    <div class="row">
    
        <!--Área de Visualização de Informações do perfil-->
        <div class="col-lg-2 col-sm-12">
            <img src="<?php include("backend/photo.php"); ?>" alt="" class="about_photo">
            <input type="file" name="photo" id="photo">
            <span class="about_username"><?php echo $_SESSION['nome']; ?></span>
        </div>

        <!--Área do Formulário-->
        <div class="col-lg-10 col-sm-12">
            <form action="update.php" class="form_about">
                <input name='nome' type="text" placeholder="Nome" value="<?= $_SESSION['nome']; ?>">
                <input name='telefone' type="text" placeholder="Telefone">
                <input name='posicao' type="text" placeholder="Posição">
                <select name="estados-brasil">
                    <option value="invalido">Selecione seu estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                <button type="submit">Confirmar mudanças</button>
            </form>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');
?>