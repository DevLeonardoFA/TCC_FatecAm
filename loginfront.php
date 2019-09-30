<?php include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>

<div class="background-login">
	<div class="box">
		<div class="imageslogin"></div>
		
		
		<form action="login.php" method="POST" class="login_form">
			<input name="login" type="text" placeholder="e-mail">
			<input name="senha" type="password" placeholder="senha">
			<button type="submit" class="rounded">entrar</button>
		</form>


	</div>
</div>

<?php include('includes/footer.php')?> 
