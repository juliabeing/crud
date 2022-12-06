<?php

$id = 0;

try {
  $pdo = new PDO('mysql:host=127.0.0.1";dbname=crud', 'being', 'being');
  $stmt = $conn->prepare('SELECT * FROM fruta WHERE nome = :nome');
  $stmt->execute(array('nome' => $id));

  $result = $stmt->fetchAll();

  if ( count($result) ) {
    foreach($result as $row) {
      print_r($row);
    }
  } else {
    echo "Nennhum resultado retornado.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

 ?>