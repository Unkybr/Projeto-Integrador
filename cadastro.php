<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<title>Página Inicial</title>
</head>

<body>
	<div class="container-fluid">
		
			<nav class="navbar navbar-expand-lg navbar-light row" style="background-color: #048;">
			  <a class="navbar-brand offset-md-1 col-md-1" href="inde.php"><img src="imagem/logo.png" width="100%"></a>
			    <form class="form-inline col-md-8">
			      <input class="form-control col-md-10 mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
			    </form>
			   <?php if (isset($_SESSION['nome'])){
			    	echo "Olá, ". $_SESSION["nome"]. '<a href="logout.php">Logout</a>';
			    }else{
			    	echo'
				   <div class="col-md-2" ><a style="color: #fff;" href="" data-toggle="modal" data-target="#exampleModal">Login</a>
			   		<span style="color: white;"> ou </span>
			   						<a style="color: #fff;" href="cadastro.php" >Cadastre-se</a>
			  	 </div>';
			}
			?>
			          <!-- Modal -->
				      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				        <div class="modal-dialog" role="document">
				          <div class="modal-content">
				            <div class="modal-header">
				              <h5 class="modal-title" id="exampleModalLabel">Faça seu Login</h5>
				              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				              </button>
				            </div>
				            <div class="modal-body">
				              <form  action="login.php" method="post">
				                <div class="form-group">
				                  <label for="login">Login </label>
				                  <input type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp" placeholder="Insira seu login">
				                  <small id="login" name="login" class="form-text text-muted">Nunca iremos compartilhar seus dados.</small>
				                </div>
				                <div class="form-group">
				                  <label for="senha">Senha</label>
				                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
				                </div>
				             
				                <button type="submit" class="btn btn-primary">Confirmar</button>
				              </form>
				            </div>
				            
				          </div>
				        </div>
				      </div>
			</nav>

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark row">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="col-md-2"></div>
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav col-md-8 text-center">
			       <a class="nav-item nav-link exp-link" href="categoria.php?categoria=Telefonia">Telefonia</a>
			      <a class="nav-item nav-link exp-link" href="categoria.php?categoria=Informática">Informática</a>
			      <a class="nav-item nav-link exp-link" href="categoria.php?categoria=eletronicos">Eletrônicos</a>
			      <a class="nav-item nav-link exp-link" href="categoria.php?categoria=eletrodomesticos">Eletrodomésticos</a>
			      <a class="nav-item nav-link exp-link" href="categoria.php?categoria=eletroportateis">Eletroportáteis</a>
			      <a class="nav-item nav-link exp-link" href="categoria.php?categoria=decoracao">Decoração</a>
			      <a class="nav-item nav-link exp-link" href="categoria.php?categoria=Entretenimento">Entretenimento</a>
			    </div>
			  </div>
			</nav>

			<div style="padding: 30px">	
				<form action="registro.php" method="post"> 
					<div class="row">
						<div class="col-md-2"></div>
						<div class="form-group col-md-4">
					      <label for="inputNome4">Nome</label>
					      <input type="text" id="nome"  name="nome" class="form-control" id="inputNome4" placeholder="Nome" required>
					    </div> 
					    <div class="form-group col-md-4">
					      <label for="inputLogin4">Login</label>
					      <input type="text" id="login" name="login"  class="form-control" id="inputLogin4" placeholder="Login" required>
					    </div>
					</div>

					<div class="row">
				  <div class="col-md-2"></div>
				   <div class="form-group col-md-4">
				    <label for="inputAddress">Endereço</label>
				    <input type="text" id="endereco" name="endereco" class="form-control" id="inputAddress" placeholder="Rua, Nº - Bairro" required>
				  </div>

				   <div class="form-group col-md-1">
				    <label for="inputUF">UF</label>
				    <input type="text" id="uf" name="uf" class="form-control" id="inputUF" pattern="[A-Za-z]{2}" placeholder="UF" required>
				  </div>
				  
				  <div class="form-group col-md-3">
				    <label for="inputCPF2">CPF</label>
				    <input type="text" id="cpf" name="cpf" class="form-control" id="inputCPF" placeholder="CPF" required>
				  </div>
				</div>

				  <div class="row">
				  	<div class="col-md-2"></div>
				    <div class="form-group col-md-4">
				      <label for="inputEmail4">Email</label>
				      <input type="email" id="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputPassword4">Senha</label>
				      <input type="password" id="senha" name="senha" class="form-control" id="inputPassword4" placeholder="Senha" required>
				    </div>
				  </div>
				  <input type="hidden" name="tipo" value="cliente">
			
				  </div>
				<div style="margin-left: 18%;">
				  <button type="submit" class="btn btn-primary">Cadastrar</button>
				  </div>
				
				
			</div>
				</form>
		
			
			<footer class="border text-left row" style="background-color: #048;" >
				<div class="col-md-2"></div>
				<div class="list-group list-group-flush col-md-2 py-3 " style="background-color: #048; color: #fff;">

				  <p>Nome: Loja ABC</p>
				  <p>Endereço: Avenida das Américas,3000 - Barra da Tijuca - RJ</p>
				  <p>Telefone: 0000-0000</p>
				  <p>Email: LojaABC@xyz.com</p>
				  
				</div>
			</footer>
			
			
	</div>	
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>