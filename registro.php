<?php

	include "conect.php";
$id = '';	
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$login = $_POST['login'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$uf = $_POST['uf'];

/*
$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE login = ? AND senha = ? AND saldo' );
$stmt->bindParam(1, $login, PDO::PARAM_STR);
$stmt->bindParam(2, $senha,PDO::PARAM_STR);
$stmt->execute();
if($alvos = $stmt->fetchAll()){
    echo "Olá, ".$alvos[0]['nome'];
}
*/


$stmt = $pdo->prepare ('INSERT INTO cadastro (id,cpf,tipo, nome,login,email,senha,endereco,UF) VALUES (?,?,?,?,?,?,?,?,?)');

$stmt->bindParam(1,$id,PDO::PARAM_INT);
$stmt->bindParam(2,$cpf,PDO::PARAM_INT);
$stmt->bindParam(3,$tipo,PDO::PARAM_STR);
$stmt->bindParam(4,$nome,PDO::PARAM_STR);
$stmt->bindParam(5,$login,PDO::PARAM_STR);
$stmt->bindParam(6,$email,PDO::PARAM_STR);
$stmt->bindParam(7,$senha,PDO::PARAM_STR);
$stmt->bindParam(8,$endereco,PDO::PARAM_STR);
$stmt->bindParam(9,$uf,PDO::PARAM_STR);

if ($stmt->execute()) {

    header('Location: inde.php');
    exit;

}else{

    echo "Não foi possível realizar o cadastro.";
    header('refresh:5;url=cadastro.php',true,303);
}



?>