<?php
$dbh = new PDO('mysql:host=127.0.0.1";dbname=crud', 'being', 'being');
$consulta = $dbh->query("SELECT * FROM fruta");
$rows = $stm->fetchAll();


?>

