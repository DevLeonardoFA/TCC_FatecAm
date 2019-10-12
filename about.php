<?php

//conteúdo da página sobre

    include('backend/verificacao_logado.php');
    include('includes/header.php');
    include('includes/sidebar.php'); 
    ?>

<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <!--Área do Formulário-->
        <div class="col-8">
            <!--Área de Visualização de Informações do perfil-->            
            <div class="row">
            <div class="col-4">
                <img src="<?php include("backend/photo.php"); ?>" alt="" class="about_photo">
            </div>
            <div class="col-8"><input type="file" name="photo" id="photo">
                <span class="about_username"><?php echo $_SESSION['nome']; ?></span>
            </div></div>
            <form action="update.php" class="form_about">
                <input name='nome' type="text" placeholder="Nome" value="<?= $_SESSION['nome']; ?>">
                <input name='idade' type="text" placeholder="Idade" value="<?= $_SESSION['idade']; ?>">
                <input name='altura' type="text" placeholder="Altura" value="<?= $_SESSION['altura']; ?>">
                <input name='posicao' type="text" placeholder="Posicao" value="<?= $_SESSION['posicao']; ?>">
                <input name='pe' type="text" placeholder="Pé" value="<?= $_SESSION['pe']; ?>">
                <input name='peso' type="text" placeholder="Peso" value="<?= $_SESSION['peso']; ?>">                
                <input name='email' type="text" placeholder="E-Mail" value="<?= $_SESSION['email']; ?>">
                <input name='categoria' type="text" placeholder="Posição">
                <input name='video' type="text" value="<?= $_SESSION['video'];?>"  placeholder="Link do Video">
                <div>
                    <select name="uf" id="uf" disabled data-target="#cidade">
                        <option value="">Estados</option>
                    </select>
                </div>

                <div>
                    <select name="cidade" id="cidade" disabled>
                        <option value="">Cidade</option>
                    </select>
                </div>
                <button type="submit">Confirmar mudanças</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php
    include('includes/footer.php');
?>