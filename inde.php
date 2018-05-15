<?php 
	session_start();
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<script></script>
	<title>Página Inicial</title>
</head>

<body>


	<div class="container-fluid">
		
			<nav class="navbar navbar-expand-lg navbar-light row" style="background-color: #048;">
			  <a class="navbar-brand offset-md-1 col-md-1" href="inde.php"><img src="imagem/logo.png" width="100%"></a>
			    <form class="form-inline col-md-8" method="POST" action="busca.php">
			      <input class="form-control col-md-10 mr-sm-2" type="text" id="busca" name="busca" placeholder="Procurar" aria-label="Search">
			      
			    </form>
			    <a href="test.php" <i class="fas fa-shopping-cart" style="font-size: 150%; padding: 0px 25px; color: white;"></i></a>
			    <?php if (isset($_SESSION['nome'])){
			    	echo "<span style='color: #fff; padding: 0px 5px;'> Olá, ". $_SESSION["nome"] .'</span>  <a style="color: #fff;" href="logout.php"></br> Logout</a>';

			    }else{
			    	echo'
				   <div class="col-md-1" ><a style="color: #fff;" href="" data-toggle="modal" data-target="#exampleModal">Login</a>
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
			<div class="row offset-md-4 my-4">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="imagem/america1.png" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="imagem/tele.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="imagem/america3.jpg" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			  </div>

			</div>
			<?php 
				include 'conect.php';
				$stmt = $pdo->prepare('SELECT * FROM produtos ORDER BY id DESC LIMIT 3');
				$stmt->execute();
				if($alvos = $stmt->fetchAll()){

			 ?>
			<div class="row my-5 offset-md-2 ">

				<div class="card col-md-3 mx-3" ">
				  <img class="card-img-top" src="imagem/<?php echo $alvos[0]['prod_img']; ?>" width = "50%" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $alvos[0]['nome']; ?></h5>
				    <p class="card-text"><?php echo $alvos[0]['descricao'] ?></p>
				    <p class="card-text"><?php echo "R$ ".$alvos[0]['preco'] ?></p>
				    <form action="carrinho.php" method="post">
						<button type='submit' class="btn btn-primary">COMPRAR</button>
						<input type="hidden" name="nome-produto" value="<?php echo $alvos[0]['nome']; ?>">
						<input type="hidden" name="descricao-produto" value="<?php echo $alvos[0]['descricao']; ?>">
						<input type="hidden" name="preco-produto" value="<?php echo $alvos[0]['preco']; ?>">
					</form>

				  </div>
				</div>
				  <div class="card col-md-3 mx-3">
					  <img class="card-img-top" src="imagem/<?php echo $alvos[1]['prod_img']; ?>" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><?php echo $alvos[1]['nome']; ?></h5>
					    <p class="card-text"><?php echo $alvos[1]['descricao'] ?></p>
					    <p class="card-text"><?php echo "R$ ". $alvos[1]['preco'] ?></p>
					    <form action="carrinho.php" method="post">
					    	<button type="submit" class="btn btn-primary">COMPRAR</button>
					 		<input type="hidden" name="nome-produto" value="<?php echo $alvos[1]['nome']; ?>">
							<input type="hidden" name="descricao-produto" value="<?php echo $alvos[1]['descricao']; ?>">
							<input type="hidden" name="preco-produto" value="<?php echo $alvos[1]['preco']; ?>">
					    </form>

					  </div>
					</div>
					<div class="card col-md-3 mx-3" style="">
					  <img class="card-img-top" src="imagem/<?php echo $alvos[2]['prod_img']; ?>" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title"><?php echo $alvos[2]['nome']; ?></h5>
					    <p class="card-text"><?php echo $alvos[2]['descricao'] ?></p>
					    <p class="card-text"><?php echo "R$ ". $alvos[2]['preco'] ?></p>
					   	<form action="carrinho.php" method="post">
					    	<button type="submit" class="btn btn-primary">COMPRAR</button>
					    	<input type="hidden" name="nome-produto" value="<?php echo $alvos[2]['nome']; ?>">
							<input type="hidden" name="descricao-produto" value="<?php echo $alvos[2]['descricao']; ?>">
							<input type="hidden" name="preco-produto" value="<?php echo $alvos[2]['preco']; ?>">
					    </form>
					  </div>
					</div>
				


			</div>
			<?php 
				} 
			 ?>
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