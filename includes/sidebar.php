<?php session_start(); ?>

<div id="mySidenav" class="sidenav">
  <div class="userphoto">
    <img src="" alt="PIU">
    <span class="username"><?php echo $_SESSION['nome']; ?></span>
  </div>
  
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Sobre Você</a>
  <a href="#">Videos</a>

  <a href="index.php" class="deslogar">Logout</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

