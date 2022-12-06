<?php
try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=crud', 'being', 'being');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare('INSERT INTO fruta (nome) VALUES(:nome)');
  $stmt->execute(array(
    ':nome' => 'fruta'
  ));

  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
   ?>
   