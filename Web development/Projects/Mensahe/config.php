<?PHP

    require 'vendor/autoload.php'; // Autoload the Dotenv package

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    
    $server = 'localhost';
    $username = 'root';
    $password = $_ENV['DB_PASSWORD'] ?? 'default_password';
    $db = 'mensahe';

    $con_DB = new mysqli($server, $username, $password, $db);

    if ($con_DB->connect_error) {
        die("Connection failed: " . $con_DB->connect_error);
    }
?>