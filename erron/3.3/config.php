<?php 

    require 'vendor/autoload.php'; // Autoload the Dotenv package

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $servername = "localhost";
    $username = "root";
    $password = $_ENV['DB_PASSWORD'] ?? 'default_password';
    $dbname = "inventory_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>