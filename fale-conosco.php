<?php 

//conteúdo da página home
include('backend/connection.php');
include('backend/verificacao_logado.php');
include('includes/header.php'); 


include('backend/dados-usuario.php');
$exibe = mysqli_fetch_assoc($dados_usuario);
?>

<div class="row m-0">
        <div class="col-2 sidebar">
            
            <?php include_once('includes/sidebar.php'); ?>

        </div>
        <div class="col-10 p-0">
            <?php include_once('includes/sidetop.php'); ?>
            
            <main class="page-contato block-main ">
                
                <h4>Envie seu Reporte:</h4>

                <p>Envie para nós alguma dúvidas, críticas, sugestões eou melhorias a serem feitas.</p>
                <form action="" class="form-report">

                    <label for="">
                            Assunto: <br />
                        <input type="Assunto" name="email" id="" required>
                    </label>
                    <label  for="" style="margin-top: 10px">
                        Texto: <br />
                        <textarea name="descricao" id="" rows="3" >    
                        </textarea>
                    </label>
                    <br />
                    <button type="submit" class="btn-blue d-inline-block">enviar</button>
                </form>
            
            </main>

        </div>
    </div>

