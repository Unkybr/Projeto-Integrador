<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Página Inicial</title>
</head>

<body>
	<div class="container-fluid">
		
			<nav class="navbar navbar-expand-lg navbar-light row bg-dark">
			  <a class="navbar-brand offset-md-1 col-md-1" href="inde.php"><img src="imagem/logo.png" width="100%"></a>
			    <form class="form-inline col-md-8">
			      <input class="form-control col-md-10 mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
			    </form>
			   <div class="col-md-2"><a href="" data-toggle="modal" data-target="#exampleModal" >Login</a>
			   	<span style="color: white;">ou</span>
			   						<a href="cadastro.php" >Cadastre-se</a>
			   </div>
			         <!-- Modal -->
				      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				        <div class="modal-dialog" role="document">
				          <div class="modal-content">
				            <div class="modal-header">
				              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				              </button>
				            </div>
				            <div class="modal-body">
				              <form>
				                <div class="form-group">
				                  <label for="exampleInputEmail1">Email address</label>
				                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				                </div>
				                <div class="form-group">
				                  <label for="exampleInputPassword1">Password</label>
				                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				                </div>
				                <div class="form-check">
				                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
				                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
				                </div>
				                <button type="submit" class="btn btn-primary">Submit</button>
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
			      <a class="nav-item nav-link exp-link" href="#">Telefonia</a>
			      <a class="nav-item nav-link exp-link" href="#">Informática</a>
			      <a class="nav-item nav-link exp-link" href="#">Eletrônicos</a>
			      <a class="nav-item nav-link exp-link" href="#">Eletrodomésticos</a>
			      <a class="nav-item nav-link exp-link" href="#">Eletroportáteis</a>
			      <a class="nav-item nav-link exp-link" href="#">Decoração</a>
			      <a class="nav-item nav-link exp-link" href="#">Entretenimento</a>
			    </div>
			  </div>
			</nav>

			<div style="padding: 30px">	
				<form>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="form-group col-md-4">
					      <label for="inputNome4">Nome</label>
					      <input type="text" class="form-control" id="inputNome4" placeholder="Nome">
					    </div> 
					    <div class="form-group col-md-4">
					      <label for="inputSobrenome4">Sobrenome</label>
					      <input type="text" class="form-control" id="inputSobrenome4" placeholder="Sobrenome">
					    </div>
					</div>

					<div class="row">
				  <div class="col-md-2"></div>
				   <div class="form-group col-md-4">
				    <label for="inputAddress">Endereço</label>
				    <input type="text" class="form-control" id="inputAddress" placeholder="Rua, Nº - Bairro">
				  </div>

				   <div class="form-group col-md-1">
				    <label for="inputUF">UF</label>
				    <input type="text" class="form-control" id="inputUF" placeholder="UF">
				  </div>
				  
				  <div class="form-group col-md-3">
				    <label for="inputCPF2">CPF</label>
				    <input type="text" class="form-control" id="inputCPF" placeholder="CPF">
				  </div>
				</div>

				  <div class="row">
				  	<div class="col-md-2"></div>
				    <div class="form-group col-md-4">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputPassword4">Password</label>
				      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
				    </div>
				  </div>

			
				  </div>
				<div style="margin-left: 18%;">
				  <button type="submit" class="btn btn-primary">Cadastrar</button>
				  </div>
				</form>
			</div>	
			
	</div>	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>