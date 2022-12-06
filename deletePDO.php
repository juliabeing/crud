<?php
$id = 1;
$pdo = new PDO('mysql:host=127.0.0.1;crud', 'being', 'being');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {


  $stmt = $pdo->prepare('DELETE FROM fruta1 WHERE nome = :nome');
  $stmt->bindParam('nome', $id, );
  $stmt->execute();

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?> 