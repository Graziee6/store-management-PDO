<?php
$servername = "localhost";
$username = "root";
$password = "*souvenir#";

try {
    $connection = new PDO("mysql:host=$servername;dbname=stock", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
