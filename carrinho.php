<?php 

	session_start();
	include 'conect.php';

	$nm_prod = $_POST['nome-produto'];
	$desc_prod = $_POST['descricao-produto'];
	$preco_prod = $_POST['preco-produto'];
	$img_prod = $_POST['imagem-produto'];

	if (!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho']= []; 
	}
	$carrinho2 = [$nm_prod, $desc_prod, $preco_prod, $img_prod];

	array_push($_SESSION['carrinho'], $carrinho2);

	
	header('location: inde.php')



 ?>