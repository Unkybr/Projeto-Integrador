<?php 

	session_start();
	include 'conect.php';

	$nm_prod = $_POST['nome-produto'];
	$desc_prod = $_POST['descricao-produto'];
	$preco_prod = $_POST['preco-produto'];

	if (isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho']= []; 
	}

	array_push($_SESSION['carrinho'], [$nm_prod, $desc_prod, $preco_prod]);

	header ('location:inde.php');




 ?>