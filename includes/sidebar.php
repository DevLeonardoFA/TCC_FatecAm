
<!--codigo do sidebar-->
  <div class="block-side">
    <figure class="userphoto" style="background: url(<?php echo $exibe['foto_perfil'];?>) no-repeat; background-size: cover;">

    </figure>

    
    <div class="config-link">
      <span><img src="" alt=""></span>
      <a href="./configuracoes.php">Configurações</a>
    </div>
    
    <ul>  
      <li> <a href="./main.php">Inicio</a></li>
      <li> <a href="./meus-videos.php">Meus Vídeos</a></li>
      <li> <a href="./fale-conosco.php">Fale conosco</a></li>
      <li>
          <div class="menu-dropdown color-blue"> Pesquisar atleta 
              <?php echo '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 491.996 491.996" style="enable-background:new 0 0 491.996 491.996;fill: #2b0087;" xml:space="preserve">
<g><g><path d="M484.132,124.986l-16.116-16.228c-5.072-5.068-11.82-7.86-19.032-7.86c-7.208,0-13.964,2.792-19.036,7.86l-183.84,183.848    L62.056,108.554c-5.064-5.068-11.82-7.856-19.028-7.856s-13.968,2.788-19.036,7.856l-16.12,16.128    c-10.496,10.488-10.496,27.572,0,38.06l219.136,219.924c5.064,5.064,11.812,8.632,19.084,8.632h0.084    c7.212,0,13.96-3.572,19.024-8.632l218.932-219.328c5.072-5.064,7.856-12.016,7.864-19.224    C491.996,136.902,489.204,130.046,484.132,124.986z"/>
    </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>'; ?> 
            </div>
          <div class="sub-menu">
                <form action="./main.php?pesquisa" method="GET" class="form_pesquisar">
                    <input type="hidden" name='pesquisa'>
                    <input type="text" name="nome" placeholder="Nome">
                    <!-- <input type="text" name="uf" placeholder="Estado">
                    <input type="text" name="cidade" placeholder="Cidade">
                    <input type="text" name="ano" placeholder="Ano de Nascimento">
                    <input type="text" name="posicao" placeholder="Posição"> -->
                  
                    <select name="uf" id="uf" >
                        <option value="">Estados</option>
                    </select>
        
                    <select name="cidade" id="cidade">
                        <option value="">Cidade</option>
                    </select>
                  
                    <select name="ano_nascimento" >
                        <option value="">Ano de Nascimento</option>
                    </select>

                    <select name="posicao" >
                        <option value="">Posição</option>
                    </select>

                    <button type="submit">Procurar <?php echo '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 23" fill="none">
<path d="M10.2055 0.00225067C4.93028 0.00225067 0.612549 4.28376 0.612549 9.53071C0.612549 14.7777 4.93028 19.0723 10.2055 19.0723C12.2338 19.0723 14.1117 18.4269 15.66 17.3539L20.8455 22.5012C21.5049 23.1675 22.5837 23.1675 23.2431 22.5012C23.9025 21.8453 23.9025 20.7828 23.2431 20.1269L18.0602 14.9665C19.1495 13.4161 19.7878 11.5482 19.7878 9.53071C19.7878 4.28376 15.4701 0.00225067 10.2055 0.00225067ZM10.2055 3.3603C13.6422 3.3603 16.4012 6.10445 16.4012 9.53071C16.4012 12.957 13.6422 15.7037 10.2055 15.7037C6.75813 15.7037 4.00185 12.9596 4.00185 9.53333C4.00185 6.10445 6.75813 3.3603 10.2055 3.3603Z" fill="white"/>
</svg>';?></button>
              </form>
          </div>
      </li>
    </ul>
  </div>

  <a href="backend/logout.php" class="deslogar">Logout</a>

