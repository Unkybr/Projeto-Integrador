<?php  
	include 'conect.php'

$id = '';
$idCliente = '';
$idProduto = '';
$nomeProd = $_POST['nomeProd'];
$descProd = $_POST['descProd'];
$precoProd = $_POST['precoProd'];
$precoTotal = $_POST['precoTotal'];
$totalParc = $_POST['totalParc'];



//foreach($_SESSION['carrinho'] as){


      	 $stmt = $pdo->prepare ("INSERT INTO pedidos (id, idCliente, idProduto, nomeProd, descProd, precoProd, precoTotal, totalParc) VALUES (?,?,?,?,?,?,?,?)");

        $stmt->bindParam(1,$id,PDO::PARAM_INT);
		$stmt->bindParam(2,$idCliente,PDO::PARAM_INT);
		$stmt->bindParam(3,$idProduto,PDO::PARAM_STR);
		$stmt->bindParam(4,$nomeProd,PDO::PARAM_STR);
		$stmt->bindParam(5,$descProd,PDO::PARAM_STR);
		$stmt->bindParam(6,$precoProd,PDO::PARAM_STR);
		$stmt->bindParam(7,$precoTotal,PDO::PARAM_STR);
		$stmt->bindParam(8,$totalParc,PDO::PARAM_STR);
		
		$stmt->execute();
	      

?>