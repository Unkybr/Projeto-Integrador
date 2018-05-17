<?php
	session_start();
	include 'conect.php'; 
	
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
			    <a href="" <i class="fas fa-shopping-cart" style="font-size: 150%; padding: 0px 25px; color: white;"></i></a>
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
			
			<div class="table-responsive col-12">
<table cellpadding="8" cellspacing="1" class=" table" style="table-layout: fixed; width: 100%">
<thead>
<tr>
<th class="text-center"><strong>Foto</strong></th>
<th class="text-center"><strong>Nome</strong></th>
<th class="text-center"><strong>Descrição</strong></th>
<th class="text-center"><strong>Preço</strong></th>
</tr>	
</thead>
<tbody>
<?php
	$item_total=0;		
	
    foreach ($_SESSION["carrinho"] as $item){
		?>
				
				<tr>
					<td class="text-center align-middle"> <figure class="figure"><img width="50%" class="img3" src="<?php echo "imagem/".$item[3];?>"></figure></td>
					<td class="text-center align-middle"><?php echo $item[0]; ?></td>
					<td class="text-center align-middle"><?php echo $item[1]; ?></td>
					<td class="text-center align-middle"><?php echo "R$ ". $item[2]; ?></td>
				</tr>
				<?php
        $item_total += ($item[2]);
        $item_juros = ($item_total*1.12);
		}
		?>

<tr>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td class="text-center" colspan="1" align=right><strong>Total:</strong> <?php echo "R$ ".number_format((float)$item_total, 2, '.', ''); ?></td>
</tr>
<tr>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td class="text-center" colspan="1" align=right><form class="align-middle" method="get" action="#">
				<div class="row justify-content-center">
				<div class="col-8">
				<select class="custom-select" id="inputGroupSelect01">
				  <option value="a" selected disabled>Selecione o parcelmento:</option>
				  <option value="1">1x de <?php echo $item_total; ?> (à vista)</option>
				  <option value="2">2x de <?php echo number_format((float)$item_total/2, 2, '.', '');?> (sem juros)</option>
				  <option value="3">3x de <?php echo number_format((float)$item_total/3, 2, '.', '');?> (sem juros)</option>
				  <option value="4">4x de <?php echo number_format((float)$item_total/4, 2, '.', '');?> (sem juros)</option>
				  <option value="5">5x de <?php echo number_format((float)$item_total/5, 2, '.', '');?> (sem juros)</option>
				  <option value="6">6x de <?php echo number_format((float)$item_total/6, 2, '.', '');?> (sem juros)</option>
				  <option value="7">7x de <?php echo number_format((float)$item_total/7, 2, '.', '');?> (sem juros)</option>
				  <option value="8">8x de <?php echo number_format((float)$item_total/8, 2, '.', '');?> (sem juros)</option>
				  <option value="9">9x de <?php echo number_format((float)$item_total/9, 2, '.', '');?> (sem juros)</option>
				  <option value="10">10x de <?php echo number_format((float)$item_total/10, 2, '.', '');?> (sem juros)</option>
				  <option value="11">11x de <?php echo number_format((float)$item_juros/11, 2, '.', '');?> (12% de juros)</option>
				  <option value="12">12x de <?php echo number_format((float)$item_juros/12, 2, '.', '');?> (12% de juros)</option>
				</select>
  					</div>
  					</div>
            </form></td>
</tr>

<tr>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td class="text-center" colspan="1" align=right><form class="align-middle" method="get" action="#">
            <a href="saircarrinho.php?acao=esvaziar" class="btn btn-danger">Esvaziar Carrinho</a>
            <?php
            if (isset($_SESSION['nome'])) {

            echo '<a href="finalizarcompra.php" class="btn btn-primary text-light" name="id" id="id">Finalizar Compra</a>';
        	}
        	else{
        		echo '<a href="finalizarcompra.php" class="btn btn-primary text-light disabled">Finalizar Compra</a>';
        		}
        		?>
            </form></td>

            
</tr>

</tbody>
</table>
</div>		





			
		
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