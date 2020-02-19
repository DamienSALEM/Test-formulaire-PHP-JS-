<?php
$dsn = 'mysql:dbname=inscription_test;host=localhost';
$user = 'root';
$pass = '';
try {
    $conn = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
