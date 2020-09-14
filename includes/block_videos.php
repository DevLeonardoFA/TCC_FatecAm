<?php
include_once('backend/lista_videos.php');

?>


    <main>

        <?php if ($row > 0) { ?>

            <div class="row">

                <?php while($exibe = mysqli_fetch_assoc($result)){?>
                   
                    <div class="col-3">
                        <div class="area_video">

                            <?php
                                $url_video = str_replace('watch?v=' , 'embed/' , $exibe['url_video']);
                            ?>

                            <div class="video">
                                <iframe class="w-100" height='300' src="<?php echo $url_video.'?controls=1'; ?>" frameborder="0"></iframe>
                            </div>

                            <div class="jogador_info">
                                <h5><?php echo $exibe['nome_completo']; ?></h5>
                                <h5><?php echo $exibe['cidade'].' - '.$exibe['uf']; ?> </h5>
                            </div>

                        </div>
                    </div>

                <?php } ?>

            </div>       

        <?php }?>

    </main>