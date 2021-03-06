<?php 

//conteúdo da página home
include('backend/connection.php');
include('backend/verificacao_logado.php');
include('includes/header.php'); 

include('backend/dados-usuario.php');
$exibe = mysqli_fetch_assoc($dados_usuario);


?>  

<div class="block-principal">
        <div class="sidebar">
            <?php include_once('includes/sidebar.php'); ?>
        </div>

        <div class="sidemain p-0">
            <?php include_once('includes/sidetop.php'); ?>
            <main class="pagina_configuracoes  block-main ">

                <h5 class="title-videos">Gerenciamento de vídeos</h5>
                <div class="meus-videos ">

                <?php 
                    while( $exibe = mysqli_fetch_assoc($videos_usuario) ) { 
                        
                        $url_video = str_replace('watch?v=' , 'embed/' , $exibe['url_video']);
                        ?>

                        <div class="item">
                            <div class="video">
                                <iframe class="w-100" height='300' allowfullscreen src="<?php echo $url_video.'?controls=1'; ?>" frameborder="0"></iframe>
                            </div>
                            
                            <form action="./backend/remove-video.php">
                                <input type="hidden" name="cod_video" value="<?php echo $exibe['cod_video']; ?>">
                                <button class="cor-red btn-remove">Remover vídeo</button>
                            </form>
                                
                        </div>
                    <?php 
                    }
                
                ?>

                </div>
                <div class="config-video mt-5">

                    <h5 class="title-videos">Adicionar Vídeos</h5>

                    <form action="backend/update.php" method="GET">
                        <label for="">URL do video do youtube:
                            <input type="text" name="url_video" required>
                        </label>
                        <button type="submit">Adicionar video</button>
                    </form>
                </div>
            </main>

        </div>
    </div>



<?php include('includes/footer.php'); ?>
?>