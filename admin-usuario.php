<?php 

//conteúdo da página home
include('backend/connection.php');
include('backend/verificacao_logado.php');
include('includes/header.php'); 
include('backend/dados-usuario.php');


//definindo numero de itens visiveis na tela
$itens_por_pagina = 1;

$data = implode("-",array_reverse(explode("/",$_SESSION['usuario']['data_nascimento'])));
$exibe = mysqli_fetch_assoc($dados_usuario);


if(isset($_GET['usuario'])){
    $exibe_dados = mysqli_fetch_assoc($usuario);
}else{
    header('Location: main.php');
}

?>

    <div class="row m-0">
        <div class="col-2 sidebar">
            
            <?php include_once('includes/sidebar.php'); ?>

        </div>
        <div class="col-10 p-0">
            <?php include_once('includes/sidetop.php'); ?>
            <main class="pagina_configuracoes  block-main bloco-perfil">
                

                <div class="dados-usuario">
                    <h5>Area administrativa de vídeos do usuário.</h5>

                    <p>
                        <span class="font-weight-bold">ID usuario:</span> <?php echo $exibe_dados['cod_jogador']; ?> <br />
                        <span class="font-weight-bold">Nome :</span>  <?php echo $exibe_dados['nome_completo']; ?>
                    </p>

                </div>

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

                <div class="block-senha">

                    <?php 
                        if(isset($_GET['info_senha'])){
                            if($_GET['info_senha'] == 1){

                                echo "<div class='cor-verde'>Senha salva com sucesso!!</div>";

                            }else if($_GET['info_senha'] == 2){
                                echo "<div class='cor-red'>Senha nova diferente, insira novamente!!</div>";
                            }else{
                                echo "<div class='cor-red'>Você inseriu a senha errada!!</div>";
                            }
                        }

                    ?>
                    
                </div>

            </main>

        </div>
    </div>



<?php include('includes/footer.php'); ?>