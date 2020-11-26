
<?php

include('backend/dados-usuario.php');


//definindo numero de itens visiveis na tela
$itens_por_pagina = 1;



$exibe = mysqli_fetch_assoc($dados_usuario);
if(isset($_GET['usuario'])){
    $exibe_dados = mysqli_fetch_assoc($usuario);
}else{
    header('Location: main.php');
}
$data = implode("-",array_reverse(explode("/",$exibe_dados['data_nascimento'])));

$explode_age = explode("-", $exibe_dados['data_nascimento']);

?>

<main class="bloco-perfil">
        <div class="row ">
            <div class="col-5">
                <div class="row pt-4">
                    <div class="col-5">
                        <div class="imagem-perfil">
                            <img class="img-fluid" src="<?php echo $exibe_dados['foto_perfil']?>" alt="">
                        </div>

                    </div>
                    <div class="col-7 pl-0">
                        <div class='desc'> <span>Nome completo:</span> <?php echo $exibe_dados['nome_completo'];?></div>
                        <div class='desc'> <span>Data de Nascimento:</span> <?php echo $explode_age[2].'-'.$explode_age[1].'-'.$explode_age[0]; ?></div>
                        <div class='desc'> <span>Altura:</span> <?php echo $exibe_dados['altura'].' cm'; ?></div>
                        <div class='desc'> <span>Peso:</span> <?php echo $exibe_dados['peso'];?></div>
                        <div class='desc'> <span>Origem:</span> <?php echo $exibe_dados['cidade'].'-'.$exibe_dados['uf'];?></div>
                        <div class='desc'> <span>Email contato:</span> <?php echo $exibe_dados['email'];?></div>
                    </div>
                </div>



            </div>
            <div class="col-7 block-about-player"> 
                <h4>Descrição do atleta:</h4> 
                <p><?php echo $exibe_dados['descricao'];?></p>
        
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <h3>Vídeos Publicados</h3> 

                <div class="meus-videos ">
                    <?php 
                        while( $exibe = mysqli_fetch_assoc($videos_usuario_admin) ) { 
                            
                            $url_video = str_replace('watch?v=' , 'embed/' , $exibe['url_video']);
                            ?>

                            <div class="item">
                                <div class="video">
                                    <iframe class="w-100" height='300' allowfullscreen src="<?php echo $url_video.'?controls=1'; ?>" frameborder="0"></iframe>
                                </div>         
                            </div>
                        <?php 
                        }
                    ?>
                </div>


            </div>
            
        </div>



</main>