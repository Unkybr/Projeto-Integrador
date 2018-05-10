<?php 

  include 'conect.php';


$busca = $_POST['busca'];


$stmt = $pdo->prepare('SELECT * FROM produtos WHERE nome = ? LIKE ?');
$stmt->bindParam(1, $busca, PDO::PARAM_STR);
$stmt->bindParam(2, $busca, PDO::PARAM_STR);

$stmt->execute();
if($alvos = $stmt->fetchAll()){ 
  
  header('location: result.php');
} else{
  echo "ERRRRROOOOOOOOOOOOOOU!";

}



?>
 