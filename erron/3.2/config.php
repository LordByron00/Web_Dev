<?php 
    require 'vendor/autoload.php'; // Autoload the Dotenv package

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // Access the environment variable
    $dbPassword = $_ENV['DB_PASSWORD'] ?? 'default_password';

    $servername = "localhost";
    $username = "root";
    $password = $dbPassword;
    $dbname = "MARVIN";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>