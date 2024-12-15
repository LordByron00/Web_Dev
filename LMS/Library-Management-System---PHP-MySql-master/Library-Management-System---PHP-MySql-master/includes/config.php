<?php 

require 'vendor/autoload.php'; // Autoload the Dotenv package

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dbpass = $_ENV['DB_PASSWORD'] ?? 'default_password';

// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS',$dbpass);
define('DB_NAME','library');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>

