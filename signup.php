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
                    <div class="col-6 block-input">
                        <label for="">Nome completo:</label>
                         <input class="form-control" type="text" name="nome_completo" id="" placeholder="Nome Completo">
                    </div>  
                    <div class="col-6 block-input"> 
                        <label for="">E-mail:</label>
                        <input class="form-control" type="email" name="email" id="" placeholder="Email"></div>
                    
                    <div class="col-6 block-input">
                        <label for="">Selecione o Estado:</label>
                        <select class="form-control" name="uf" id="">
                            <option value="SP">SP</option>
                        </select>
                    </div>

                    <div class="col-6 block-input">
                        <label for="">Selecione Cidade:</label>
                        <select class="form-control" name="cidade" id="">
                            <option value="Americana">Americana</option>
                        </select>
                    </div>
                    
                    <div class="col-12 block-input">
                        <label for="">Data de Nascimento:</label>
                        <input class="form-control" type="date" name="data_nascimento" > </div>

                    <div class="col-6 block-input">
                        <label for="">Senha:</label>
                        <input class="form-control" type="password" name="senha" placeholder="Senha"></div>
                    <div class="col-6 block-input">
                        <label for="">Confirmar Senha:</label>
                        <input class="form-control" type="password" name="rsenha" placeholder="Confirmação de Senha"></div>
                    
                    <div class="col-12 block-input">
                        <input type="checkbox"> Li e concordo com os <span><a href="">Termo de uso</a></span> </div>
                    
                    
                </div>

                <div class="block_register" >
                    <a href="./login.php">Voltar para Login</a>
                </div>

                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </form>
        </div>
</main>

<?php include("includes/footer.php") ?>