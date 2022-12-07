<?php




try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=crud', 'being', 'being');
  $stmt = $pdo->query("SELECT * FROM fruta");
$result = $stmt->fetch();


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