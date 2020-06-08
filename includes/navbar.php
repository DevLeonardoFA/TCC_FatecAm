<!--codigo do navbar-->

<div class="container fixed-top">
	<div class="row">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="

			<?php $login = 0;if($login == 1) {echo("home.php?pagina=0");}else{echo("index.php");}?>
			
			">icon</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="loginfront.php" data-toggle="modal" data-target="#exampleModal" >Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="loginfront.php" data-toggle="modal" data-target="#exampleModal2"> Cadastrar</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>