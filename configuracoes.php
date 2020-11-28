<?php 

//conteúdo da página home
include('backend/connection.php');
include('backend/verificacao_logado.php');
include('includes/header.php'); 
include('backend/dados-usuario.php');


//definindo numero de itens visiveis na tela
$itens_por_pagina = 1;


$exibe = mysqli_fetch_assoc($dados_usuario);



?>
<!-- 
    <pre>
        <?php print_r($exibe); ?>
    </pre> -->

    <div class="block-principal">
        <div class="sidebar">
            <?php include_once('includes/sidebar.php'); ?>

        </div>
         <div class="sidemain p-0">
            <?php include_once('includes/sidetop.php'); ?>
            <main class="pagina_configuracoes  block-main ">
                <div class="config-dados">
                    <form action="backend/update.php" method="POST" enctype="multipart/form-data">

                        

                        <div class="row no-gutters block-fotos">
                            <div class="foto-perfil" style="background: url(<?php echo $exibe['foto_perfil']; ?>)no-repeat; backgroud-size: cover; flex: 1;">
                                <div class="click">Selecione a imagem</div>
                                <input name="imagem" type="file" accept="image/png, image/jpeg">
                            </div>
                            <div style="padding: 2px 0px 0px 20px; width: 860px; ">
                                <label for="">
                                     E-mail: <br />
                                    <input type="email" name="email" id="" placeholder="Email" value="<?php echo $exibe['email']; ?>" required>
                                </label>
                                <label  for="" style="margin-top: 10px">
                                    Conte sobre você: <br />
                                    <textarea name="descricao" id="text-area" 
                                    rows="3" cols="33" >
                                        Kaká foi convocado para o Championship Youth World de 2001, mas sua equipe foi eliminada pela Gana nas quartas de final. Vários meses depois, ele fez sua estreia na equipe sênior do Brasil, em um amistoso contra a Bolívia, em 31 de janeiro de 2002.          
                                    </textarea>
                                </label>
                            </div>

                        </div>

                        <div class="block-campos">
                            
                            <label for="">
                            Nome Completo: <br />
                            <input type="text" name="nome_completo" id="" placeholder="Nome Completo" value="<?php echo $exibe['nome_completo']; ?>" required></label>
                            <label for="">
                            Data de nascimento: <br />
                            <input type="date" name="data_nascimento" value="<?php echo $exibe['data_nascimento']; ?>" required>  </label>
                            <label for="">
                            CPF: <br />
                            <input type="number" name="CPF" id=""  value="<?php echo $exibe['CPF']; ?>" required></label>
                            <label for="">
                            Peso: <br />
                            <input type="text" name="peso" id=""  value="<?php echo $exibe['peso']; ?>" required ></label>
                            <label for="">
                            Altura(cm): <br />
                            <input type="number" name="altura" id=""  value="<?php echo $exibe['altura']; ?>" required></label>
                            <label for="">
                                Posição: <br />
                                <select name="posicao" required>
                                    <option value="" >Selecione a Posição</option>
                                    <option <?php if($exibe['posicao'] == 'Goleiro'){ echo 'selected'; }?> value="Goleiro" >Goleiro</option>
                                    <option <?php if($exibe['posicao'] == 'Meio-campo'){ echo 'selected'; }?> value="Meio-campo">Meio-Campo</option>
                                    <option <?php if($exibe['posicao'] == 'Meio-atacante'){ echo 'selected'; }?> value="Meio-atacante">Meio-Atacante</option>
                                    <option <?php if($exibe['posicao'] == 'Atacante'){ echo 'selected'; }?> value="Atacante">Atacante</option>
                                    <option <?php if($exibe['posicao'] == 'Centroavante'){ echo 'selected'; }?> value="Centroavante">Centroavante</option>
                                    <option <?php if($exibe['posicao'] == 'Zagueiro'){ echo 'selected'; }?> value="Zagueiro">Zagueiro</option>
                                    <option <?php if($exibe['posicao'] == 'Volante'){ echo 'selected'; }?> value="Volante">Volante</option>
                                    <option <?php if($exibe['posicao'] == 'Lateral Direito'){ echo 'selected'; }?> value="Lateral Direito">Lateral Direito</option>
                                    <option <?php if($exibe['posicao'] == 'Lateral Esquerdo'){ echo 'selected'; }?> value="Lateral Esquerdo">Lateral Esquerdo</option>
                                </select>
                            
                            </label>
                            <label for="">
                                CEP: <br />
                                <input type="text" name="cep" placeholder="CEP" value="<?php echo $exibe['cep']; ?>"></label>
                            <label for="">
                                Cidade <br />
                                <input type="text" name="cidade" placeholder="Cidade" value="<?php echo $exibe['cidade']; ?>"></label>
                            <label for="">
                                Estado: <br />
                                <input type="text" name="uf" placeholder="UF" value="<?php echo $exibe['uf']; ?>"></label>
                        </div>

                        <button type="submit">Atualizar dados</button>
                    </form>
                </div>

                <div class="block-senha">
                    
                    <form action="./backend/alterar-senha.php" method="GET">

                        <label for="">
                            Senha antiga:</br>
                            <input type="password" name="senha_antiga">
                        </label>

                        <label for="">
                            Nova Senha:</br>
                            <input type="password" name="nova_senha">
                        </label>

                        <label for="">
                            Confirme a senha:</br>
                            <input type="password" name="confirm_senha">
                        </label>
                        

                        <button type="submit">Alterar Senha</button>
                    </form>

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