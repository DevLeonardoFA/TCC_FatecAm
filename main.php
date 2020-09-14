<?php 

    //conteúdo da página home
    include('backend/verificacao_logado.php');
    include('includes/header.php'); 
    
    
?>  

<main >
    <div class="row m-0">
        <div class="col-2 sidebar">
            <?php include_once('includes/sidebar.php'); ?>
        </div>

        <div class="col-10 p-0">
            <?php include_once('includes/sidetop.php'); ?>
            <div class="block-main">
                <?php include_once('includes/block_videos.php'); ?>
            </div>
            
        </div>
    </div>
</main>


<?php include('includes/footer.php'); ?>


