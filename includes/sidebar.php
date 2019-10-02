<!--codigo do sidebar-->
<div id="mySidenav" class="sidenav">
  <div class="userphoto">
    <img src="./images/user-defaut.png" alt="PIU" style="width: 100%">
    <span class="username"><?php echo $_SESSION['nome']; ?></span>
  </div>
  
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home.php">Home</a>
  <a href="about.php">Sobre Você</a>
  <a href="#">Videos</a>

  <a href="backend/logout.php" class="deslogar">Logout</a>
</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

