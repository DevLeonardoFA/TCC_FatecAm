<?php 
	//conteúdo da tela de inicio onde é explicado a site
	include("includes/header-home.php"); 
?>

<main class="page-register">

        <div class="logo-marca"></div>
        <div class="box-formulario">
            <form method="GET" action="./backend/login.php">


                <p>Faça seu login:</p>

                <div class="form-group">
                    <label for="email-user">Insira seu e-mail</label>
                    <input type="email" name="email" class="form-control" id="email-user" placeholder="email@example.com">
                </div>

                <div class="form-group">
                    <label for="password-user">Insira a senha Senha</label>
                    <input type="password" name="senha" class="form-control" id="password-user" placeholder="Password">
                </div>  

                <?php if(isset($_GET['retorn'])){
                        echo '<div class="error"> Verifique os dados inseridos e tente novamente!</div>';
                    }  
                    
                    if(isset($_GET['cadastro'])){
                        if($_GET['cadastro'] == 1){
                            echo '<div class="sucess"> Cadastro feito com sucesso! faça o login</div>';
                        }else if($_GET['cadastro'] == 2){
                            echo '<div class="sucess"> E-mail já cadastrado.</div>';
                        }
                    
                    }?>
                    
                <div class="block_register" >
                    <a href="./signup.php">Cadastrar-se</a>
                    <a href="./recuperar.php">Recuperar senha</a>
                </div>
                
                

                <button type="submit" class="btn btn-primary">Logar</button>
            </form>

            
        </div>
</main>

<?php include("includes/footer.php") ?>
