<?php 
    //conteúdo da página home
    include('backend/verificacao_logado.php');
    include('includes/header.php'); 

    include('backend/single-usuario.php');
    include('backend/dados-usuario.php');
    $exibe = mysqli_fetch_assoc($dados_usuario);
    
?>  

<div class="block-principal">
    <div class="sidebar">
        <?php include_once('includes/sidebar.php'); ?>
    </div>

    <div class="sidemain p-0">
        <?php include_once('includes/sidetop.php'); ?>
        <div class="block-main">
            <?php include_once('includes/block-perfil.php'); ?>
        </div>
        
    </div>
</div>



<?php include('includes/footer.php'); ?>