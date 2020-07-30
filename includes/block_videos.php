<?php
include_once('backend/lista_videos.php');

?>



<?php if ($row > 0) { ?>
    <div class="row">
        <?php while($exibe = mysqli_fetch_assoc($result)){?>
            <div class="col-4">
                <div class="area_video">
                    <?php
                        $url_video = str_replace('watch?v=' , 'embed/' , $exibe['url_video']);
                    ?>

                    <div class="video">
                        <iframe class="w-100" height='300' src="<?php echo $url_video.'?controls=1'; ?>" frameborder="0"></iframe>
                    </div>

                    <div class="jogador_info">
                        teste
                        <h4><?php echo $exibe['nome_completo']; ?></h4>
                        <h4><?php echo $exibe['cidade'].' - '.$exibe['uf']; ?> </h4>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>       


    <!-- <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="home.php?pagina=0" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
            </li>
                <?php for($i=0;$i<$num_paginas;$i++){   
                    $estilo = "";
                    if ($pagina == $i) {$estilo = "class=\"active\"";}
                ?>
                    <li <?= $estilo; ?> class="page-item"><a class="page-link" href="home.php?pagina=<?= $i; ?>"><?= $i+1; ?></a></li>
                <?php } ?>
                <li class="page-item">
                <a class="page-link" href="home.php?pagina=<?= $num_paginas-1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav> -->

<?php }?>