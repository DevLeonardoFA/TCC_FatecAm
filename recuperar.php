<?php 
	//conteúdo da tela de inicio onde é explicado a site
    include("includes/header-home.php"); 
    

    include("./backend/connection.php");

    if(isset($_POST['email'])){

        $email = $_POST['email'];
        $newsenha = substr(md5(time()), 0, 10);
        $newcriptografada = md5(md5($newsenha));

        
        $verifica_email = 'SELECT * FROM jogadores where email = {$email}';

        if(mysqli_query($conexao, $verifica_email)){
            echo "Passou";
            // if(mail($email, "Sua nova senha", "Sua nova senha: ".$newsenha)){
            //     $sql_query = "UPDATE jogadores SET senha = '$newcriptografada' where email = '{$mail}'";
            //     $sql_query = mysqli_query( $conexao, $sql_query) or die('Query failed: ' . mysql_error());
            // }
        }else{
            echo "não passou";
        }
    }
?>

<main class="page-register">

        <div class="logo-marca"></div>
        <div class="box-formulario">
            <form method="POST" action="./recuperar.php">
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