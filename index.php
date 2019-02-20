<?php
$dsn = 'mysql:dbname=projetcloud;host=db';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
 	echo "connection BD succees";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


