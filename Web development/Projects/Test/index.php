<?php

    require 'vendor/autoload.php'; // Autoload the Dotenv package

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // Establish database connection
    $servername = 'localhost';
    $username = 'root';
    $password = $_ENV['DB_PASSWORD'] ?? 'default_password';
    $dbname = 'chat_db';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Get message from request
$message = $_REQUEST['message'];

// Save message in the database
$sql = "INSERT INTO messages (message) VALUES ('$message')";

if (mysqli_query($conn, $sql)) {
    echo 'Message saved successfully';
} else {
    echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
