

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form class="px-4 py-3" method="get" action="login.php">
			<div class="form-group">
			<label for="exampleDropdownFormEmail1">Endereço de email</label>
			<input type="email" name="login" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
			</div>
			<div class="form-group">
			<label for="exampleDropdownFormPassword1">Senha</label>
			<input type="password" name="senha" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary">Logar</button>
		</form>
		<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="#">Você é novo aqui? Cadastre-se</a>
			<a class="dropdown-item" href="#">Esqueceu a senha?</a>
		</div>
      </div>
    </div>
</div>


<div class="modal fade form-cadastro" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div>
			<form action="register.php" method="GET">
				<input type="text" name="nome_completo" id="" placeholder="Nome Completo">
				<input type="text" name="CPF" id="" placeholder="CPF">

				<input type="text" name="cidade" placeholder="Cidade">
				<input type="text" name="uf" placeholder="UF">
				<input type="text" name="telefone" placeholder="Telefone fixo">
				<input type="date" name="data_nascimento" >  

				<input type="email" name="email" id="" placeholder="Email">
				<input type="password" name="senha" placeholder="Senha">
				<input type="password" name="rsenha" placeholder="Confirmação de Senha">
				<button class="btn btn-primary" type="submit">Enviar</button>
			</form>
		</div>
      </div>
    </div>
  </div>
</div>

	<!-- Inportações de Script -->	
	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="./assets/js/customjs.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</body>
</html>