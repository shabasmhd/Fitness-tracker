<?php
// db.php
$host = 'localhost';
$db = 'fitness_tracker';
$user = 'root'; // Replace with your DB username
$pass = '';     // Replace with your DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
