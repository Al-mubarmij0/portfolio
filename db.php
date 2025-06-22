<?php
// db.php
$host = 'localhost';
$dbname = 'portfolio';
$username = 'root'; // change if different
$password = '';     // change if needed

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Display a user-friendly error
    die("Database connection failed: " . $e->getMessage());
}
?>
