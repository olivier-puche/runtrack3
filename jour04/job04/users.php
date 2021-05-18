<?php

$host = 'localhost';
$db   = 'utilisateurs';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
     $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
     throw new PDOException($e->getMessage(), (int)$e->getCode());
}

$statement = $pdo->prepare('SELECT * FROM utilisateurs');
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
$result = json_encode($result);
echo $result;

?>