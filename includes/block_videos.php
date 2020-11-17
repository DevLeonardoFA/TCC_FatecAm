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
           
            <div class="paginacao">
                <?php 
                        $tr = mysqli_num_rows($result_todos); // verifica o número total de registros

                        $tp = $tr / $max_videos; // verifica o número total de páginas

                        $anterior = $page - 1;
                        $proximo = $page + 1;
                    
                        if ($page > 1) {
                            echo " <a href='?pagina=$anterior'> Anterior</a> ";
                        }

                        for($i = 1; $i <= ceil($tp) ; $i++ ){
                            if($page == $i){
                                echo "<a class='active-page' href='?pagina=$i'>$i</a>";
                            }else{
                                echo "<a href='?pagina=$i'>$i</a>";
                            }    
                        }
                    
                        if ($page < $tp) {
                            echo " <a href='?pagina=$proximo'>Próxima</a>";
                        }
                ?>

           </div> 

        <?php }?>

    </main>