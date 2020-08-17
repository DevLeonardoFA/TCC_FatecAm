<?php 

    //conteúdo da página home
    include('backend/verificacao_logado.php');
    include('includes/header.php'); 
    include('includes/sidebar.php');
    
?>  

<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <?php include_once('includes/block_pesquisa.php'); ?>
        </div>
        <div class="col-10">
            <?php include_once('includes/block_videos.php'); ?>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>

    <main>
        <form action="backend/update.php" method="GET">
            <label for="">iframe do video:
                <input type="text" name="url_video" required>
            </label>
            <button type="submit">Adicionar video</button>
        </form>

    </main>

<?php
    
    include_once('footer.php');
?>