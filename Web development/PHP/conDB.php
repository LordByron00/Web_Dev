<?PHP

    require 'vendor/autoload.php'; // Autoload the Dotenv package

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();


    $server = 'localhost';
    $username = 'root';
    $password = $_ENV['DB_PASSWORD'] ?? 'default_password';

    $con_DB = new mysqli($server, $username, $password);
    if ($con_DB->connect_error) {
        die("Connection failed: " . $con_DB->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS mydb";
    $con_DB->query($sql);
    $con_DB->query("USE myDB;");
    
    $sqlCreateTB = "CREATE TABLE IF NOT EXISTS MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $con_DB->query($sqlCreateTB);
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $messages = $_REQUEST['message'];
        $name = $_REQUEST['name'];
        $username = $_REQUEST['surname'];

        $sql_insertMsg = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('$name', '$username', '$messages')";
        
        // $sql_insertMsg = "INSERT INTO MyGuests (firstname, lastname, email)
        // VALUES ('John', 'Doe', 'john@example.com')";

        $con_DB->query($sql_insertMsg);
        
        $display = $con_DB->query("SELECT * FROM myguests");
        foreach ($display as $row) {

            // Print the guest's name
            echo "Name: " . $row['firstname'] . "<br>";
          
            echo "Surname: " .  $row['lastname'] . "<br>";
            // Print the guest's email address
            echo "Email " . $row['email'] . "<br>";
          
          }
    }

    $con_DB->close();
?>