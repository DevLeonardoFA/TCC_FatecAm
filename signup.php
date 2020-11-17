<?php 
	//conteúdo da tela de inicio onde é explicado a site
	include("includes/header-home.php"); 
?>

<main class="page-register">

        <div class="logo-marca"></div>
        <div class="box-formulario">
            <form method="GET" action="./backend/cadastro.php">

                <p>Faça seu cadastro:</p>

                <div class="form-group formulario-cadastro">
                    <div class="col-12 block-input">
                         <input class="form-control" type="text" name="nome_completo" id="" placeholder="Nome Completo">
                    </div>  
                    <div class="col-12 block-input"> <input class="form-control" type="email" name="email" id="" placeholder="Email"></div>
                    <div class="col-4 block-input"><input class="form-control" type="text" name="CPF" id="" placeholder="CPF"></div>
                    <div class="col-4 block-input"><input class="form-control" type="text" name="cidade" placeholder="Cidade"></div>
                    <div class="col-4 block-input"><input class="form-control" type="text" name="uf" placeholder="UF"></div>
                    <div class="col-6 block-input"><input class="form-control" type="text" name="telefone" placeholder="Telefone fixo"></div>
                    <div class="col-6 block-input"><input class="form-control" type="date" name="data_nascimento" > </div>

                    <div class="col-6 block-input"><input class="form-control" type="password" name="senha" placeholder="Senha"></div>
                    <div class="col-6 block-input"><input class="form-control" type="password" name="rsenha" placeholder="Confirmação de Senha"></div>
                       
                </div>

                <div class="block_register" >
                    <a href="./login.php">Voltar para Login</a>
                </div>

                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </form>
        </div>
</main>

<?php include("includes/footer.php") ?>