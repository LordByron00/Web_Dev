<?php
    $error = '';

    if (isset($_POST['submitbtn'])) {
        if ($_SERVER["REQUEST_METHOD"] = "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "authenticate";

            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
            $result = $conn->query($query);

            if ($result->num_rows == 1) {
                // Successful login, do something here
                header("Location: successtest.html");
                //exit();
            } else {
                $error = "Wrong info";
            }
            $conn->close();
        }
    }
?>