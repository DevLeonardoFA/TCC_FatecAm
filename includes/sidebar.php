<!--codigo do sidebar-->
  <div class="block-side">
    <figure class="userphoto">
        <?php if($_SESSION['usuario']['img_perfil'] != ''){
            echo '<img src="'.$_SESSION['usuario']['img_perfil'].'" alt="PIU" style="width: 100%">';
        }else{
            echo '<img src="./assets/images/user-defaut.png" alt="PIU" style="width: 100%">';
        }?>
    </figure>

    
    <div class="config-link">
      <span><img src="" alt=""></span>
      <a href="./configuracoes.php">Configurações</a>
    </div>
    
    <ul>  
      <li> <a href="./main.php">Inicio</a></li>
      <li> <a href="./fale-conosco.php">Fale conosco</a></li>
      <li>
          <div class="menu-cair"> Busca avançada </div>
          <div class="sub-menu d-none">
              <form action="pesquisar.php" method="POST" class="form_pesquisar">
                  <input type="text" name="nome" placeholder="Nome">
                  <div>
                      <select name="uf" id="uf" disabled data-target="#cidade">
                          <option value="">Estados</option>
                      </select>
                  </div>

                  <div>
                      <select name="cidade" id="cidade" disabled>
                          <option value="">Cidade</option>
                      </select>
                  </div>
                  <input type="text" name="ano_nascimento" placeholder="Ano de Nascimento">
                  <input type="text" name="posicao" placeholder="Posição">
                  <button type="submit">Procurar</button>
              </form>
          </div>
      </li>
    </ul>
  </div>

  <a href="backend/logout.php" class="deslogar">Logout</a>

