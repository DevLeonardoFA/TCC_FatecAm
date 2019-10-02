<?php 
	//conteúdo da pagina de login
	include('includes/header.php');
	include('includes/navbar.php');
?>
<!--background e formulário-->
<div class="background-login">
	<div class="box">
		<div class="imageslogin"></div>
		
		<form action="login.php" method="POST" class="login_form">
			<div>
        		<input type="radio" name="posicao" value="usuario" id="usuario"> <label for="usuario">Usuário</label>
        		<input type="radio" name="posicao" value="jogador" id="jogador"> <label for="jogador">Jogador</label>
        		<input type="radio" name="posicao" value="olheiro" id="olheiro"> <label for="olheiro">Olheiro</label>
    		<div>
			<input name="login" type="text" placeholder="e-mail">
			<input name="senha" type="password" placeholder="senha"><br>
			<button type="submit" class="rounded">entrar</button>
			<a href="registerfront.php">cadastrar</a>
		</form>

	</div>
</div>

<?php include('includes/footer.php')?> 
