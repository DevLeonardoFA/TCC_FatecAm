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

print_r($exibe);
?>
    <div class="row m-0">
        <div class="col-2 sidebar">
            
            <?php include_once('includes/sidebar.php'); ?>

        </div>
        <div class="col-10 p-0">
            <?php include_once('includes/sidetop.php'); ?>
            <main class="pagina_configuracoes  block-main ">
                <div class="config-dados">
                    <form action="backend/update.php" method="POST" enctype="multipart/form-data">
                
                            <div class="foto-perfil" style="background: url(<?php echo $exibe['foto_perfil']; ?>)no-repeat; backgroud-size: cover;">
                                
                                <div class="click">Selecione a imagem</div>
                                <input name="imagem" type="file" accept="image/png, image/jpeg">
                                
                            </div>



                        <div class="block-campos">
                            <label for="">
                            E-mail: <br />
                            <input type="email" name="email" id="" placeholder="Email" value="<?php echo $_SESSION['usuario']['email']; ?>" required></label>
                            <label for="">
                            Nome Completo: <br />
                            <input type="text" name="nome_completo" id="" placeholder="Nome Completo" value="<?php echo $_SESSION['usuario']['nome_completo']; ?>" required></label>
                            <label for="">
                            Data de nascimento: <br />
                            <input type="date" name="data_nascimento" value="<?php echo $data ?>" required>  </label>
                            <label for="">
                            CPF: <br />
                            <input type="number" name="CPF" id=""  value="<?php echo $_SESSION['usuario']['CPF']; ?>" required></label>
                            <label for="">
                            Peso: <br />
                            <input type="text" name="peso" id=""  value="<?php echo $_SESSION['usuario']['peso']; ?>" required ></label>
                            <label for="">
                            Altura(cm): <br />
                            <input type="number" name="altura" id=""  value="<?php echo $_SESSION['usuario']['altura']; ?>" required></label>
                            <label for="">
                                Posição: <br />
                                <select name="posicao" required>
                                    <option value="" >Selecione a Posição</option>
                                    <option <?php if($_SESSION['usuario']['posicao'] == 'Goleiro'){ echo 'selected'; }?> value="Goleiro" >Goleiro</option>
                                    <option <?php if($_SESSION['usuario']['posicao'] == 'Meio-campo'){ echo 'selected'; }?> value="Meio-campo">Meio-Campo</option>
                                    <option <?php if($_SESSION['usuario']['posicao'] == 'Meio-atacante'){ echo 'selected'; }?> value="Meio-atacante">Meio-Atacante</option>
                                    <option <?php if($_SESSION['usuario']['posicao'] == 'Atacante'){ echo 'selected'; }?> value="Atacante">Atacante</option>
                                    <option <?php if($_SESSION['usuario']['posicao'] == 'Centroavante'){ echo 'selected'; }?> value="Centroavante">Centroavante</option>
                                    <option <?php if($_SESSION['usuario']['posicao'] == 'Zagueiro'){ echo 'selected'; }?> value="Zagueiro">Zagueiro</option>
                                    <option <?php if($_SESSION['usuario']['posicao'] == 'Volante'){ echo 'selected'; }?> value="Volante">Volante</option>
                                    <option <?php if($_SESSION['usuario']['posicao'] == 'Lateral Direito'){ echo 'selected'; }?> value="Lateral Direito">Lateral Direito</option>
                                    <option <?php if($_SESSION['usuario']['posicao'] == 'Lateral Esquerdo'){ echo 'selected'; }?> value="Lateral Esquerdo">Lateral Esquerdo</option>
                                </select>
                            
                            </label>
                            <label for="">
                                CEP: <br />
                                <input type="text" name="cep" placeholder="CEP" value="<?php echo $_SESSION['usuario']['cep']; ?>"></label>
                            <label for="">
                                Cidade <br />
                                <input type="text" name="cidade" placeholder="Cidade" value="<?php echo $_SESSION['usuario']['cidade']; ?>"></label>
                            <label for="">
                                Estado: <br />
                                <input type="text" name="uf" placeholder="UF" value="<?php echo $_SESSION['usuario']['uf']; ?>"></label>
                            <label for="">
                                Telefone Fixo:<br />
                                <input type="text" name="telefone" placeholder="Telefone fixo" value="<?php echo $_SESSION['usuario']['telefone']; ?>">
                            
                            </label>
                            
                            <label for="">
                                Telefone Celular: <br />
                                <input type="text" name="celular" placeholder="Telefone Celular" value="<?php echo $_SESSION['usuario']['celular']; ?>">
                            </label>

                        </div>


                        <button type="submit">Atualizar dados</button>
                    </form>
                </div>
            </main>

        </div>
    </div>



<?php include('includes/footer.php'); ?>