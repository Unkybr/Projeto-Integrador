<?php
session_start();
include 'conect.php';

$login  = $_POST ['login'];
$senha = $_POST['senha'];


$stmt = $pdo->prepare('SELECT * FROM cadastro WHERE login = ? AND senha = ?');
$stmt->bindParam(1, $login, PDO::PARAM_STR);
$stmt->bindParam(2, $senha,PDO::PARAM_STR);
$stmt->execute();
if($alvos = $stmt->fetchAll()){	
	$_SESSION['nome'] = $alvos[0]['nome'];
	header('location: inde.php');
} else{
	echo "ERRRRROOOOOOOOOOOOOOU!";
	header('refresh:5;url=botao.html',true,303);
}



?>