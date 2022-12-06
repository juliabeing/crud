<?php

$id = 5;
$nome = "uva";
 $pdo = new PDO('mysql:host=127.0.0.1;dbname=crud', 'being', 'being');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
 

  $stmt = $pdo->prepare('UPDATE fruta SET nome = :nome WHERE nome= :nome');
  $stmt->execute(array(
    ':id'   => $id,
    ':nome' => $nome
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>