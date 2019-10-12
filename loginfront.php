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
			<input name="login" type="text" placeholder="e-mail">
			<input name="senha" type="password" placeholder="senha"><br>
			<button type="submit" class="rounded">entrar</button>
			<a href="registerfront.php"><button type="button">cadastrar</button></a>
			<a href="forgetpassword.php">esqueci a senha</a>
		</form>

	</div>
</div>

<?php include('includes/footer.php')?> 
