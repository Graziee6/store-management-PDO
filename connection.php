<?php
$servername = "localhost";
try {
    $connection = new PDO("mysql:host=$servername;dbname=stock", "root", "*souvenir#");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
