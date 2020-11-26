<div class='sidetop'>
    <p> Bem-vindo <?php echo $_SESSION['usuario']['nome_completo']; ?> !!!</p>

    <div class="painel"> 
        <?php 
        if($_SESSION['usuario']['tipo_usuario'] == 1){ ?>
           
           <a href="./admin.php"> <span>Admin</span><img style='height:20px; width: 20px; margin-left: 5px' src='./assets/images/settings.png'></a>
        
        <?php }
        ?>
    </div>


</div>