<!--codigo do sidebar-->
<div id="mySidenav" class="sidenav">
  <div class="userphoto">
    <img src="./images/user-defaut.png" alt="PIU" style="width: 100%">
    <span class="username"><?php echo $_SESSION['nome']; ?></span>
    <button class="conf" data-toggle="modal" data-target="#modalExemplo"></button>
  </div>
  
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php?pagina=0">Videos</a>
  <?php 
  if ($_SESSION['categoria'] == 1) {
    echo'<a href="about.php">Atleta</a>';
  }
  
  ?>
  

  <a href="backend/logout.php" class="deslogar">Logout</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

 <!-- Modal -->
 <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Configurações</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body btn-group-vertical">
            <button tipe="button" class="">Desabilitar Conta</button>
            <button tipe="button" class="">Deletar Conta</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary fullwidth" data-dismiss="modal" style="height: 60px;">Fechar</button>
          </div>
        </div>
      </div>
    </div>

