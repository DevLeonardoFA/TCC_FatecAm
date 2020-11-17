<?php 
	//conteúdo da tela de inicio onde é explicado a site
	include("includes/header-home.php"); 
?>

<main class="page-register">

        <div class="logo-marca"></div>
        <div class="box-formulario">
            <form method="GET" action="./backend/login.php">
                <p>Digite seu email:</p>
                <div class="form-group">
                    <label for="email-user">Insira seu e-mail</label>
                    <input type="email" name="email" class="form-control" id="email-user" placeholder="email@example.com">
                </div>

                <div class="block_register" >
                    <a href="./login.php">Voltar para login</a>
                </div>

                <button type="submit" class="btn btn-primary">Recuperar</button>
            </form>

            
        </div>
</main>

<?php include("includes/footer.php") ?>