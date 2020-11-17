<form action="./backend/cadastro.php" method="GET">
	<input type="text" name="nome_completo" id="" placeholder="Nome Completo">
	<input type="text" name="CPF" id="" placeholder="CPF">

	<input type="text" name="cidade" placeholder="Cidade">
	<input type="text" name="uf" placeholder="UF">
	<input type="text" name="telefone" placeholder="Telefone fixo">
	<input type="date" name="data_nascimento" >  

	<input type="email" name="email" id="" placeholder="Email">
	<input type="password" name="senha" placeholder="Senha">
	<input type="password" name="rsenha" placeholder="Confirmação de Senha">
	<button class="btn btn-primary" type="submit">Cadastrar</button>
</form>

<form action="./backend/cadastro.php" method="GET">
	<input type="mail" name="email" placeholder="E-mail">
</form>

<div class="modal-custom" id="modal-login">
	<div class="box-modal">
		<div class="header-modal">
			<div class="title"></div>
			<div class="close"></div>
		</div>
		<div class="body-modal">
			<form class="px-4 py-3" method="GET" action="./backend/login.php">
				<div class="form-group">
					<label for="email-user">Insira seu e-mail</label>
					<input type="email" name="email" class="form-control" id="email-user" placeholder="email@example.com">
				</div>

				<div class="form-group">
					<label for="password-user">Insira a senha Senha</label>
					<input type="password" name="senha" class="form-control" id="password-user" placeholder="Password">
				</div>

				<button type="submit" class="btn btn-primary">Logar</button>
			</form>
		</div>

		<div class="footer-modal">
			
		
		</div>
	</div>
</div>

<!-- <div class="modal-custom" id="modal-register">
	<div class="box-modal">
		<div class="header-modal">
			<div class="title"></div>
			<div class="close"></div>
		</div>
		<div class="body-modal">

		</div>
		<div class="footer-modal">
		
		</div>
	</div>
</div>

<div class="modal-custom" id="modal-forgot">
	<div class="box-modal">
		<div class="header-modal">
			<div class="title"></div>
			<div class="close"></div>
		</div>

		<div class="body-modal">
		</div>

		<div class="footer-modal">
		
		</div>
	</div>
</div> -->
