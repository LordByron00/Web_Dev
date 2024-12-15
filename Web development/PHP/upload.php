<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        
        if (isset($_POST["submit"])) {

            $fileInput = $_FILES["fileUpload"];
            $path = $fileInput["tmp_name"];
            $target_Dir = "./uploads/";
            $destination = $target_Dir . $fileInput["name"];
            
            $fileExtension = pathinfo($fileInput['name'], PATHINFO_EXTENSION);
            $allowedExtensions = array('jpg', 'jpeg', 'png');
            
            if (in_array($fileExtension, $allowedExtensions)) {
                move_uploaded_file($path, $destination);
                echo "File sucessfully uploaded!<br>";
            } else {
                echo "The file failed to upload!.<br>";
            }
            setcookie("file", $fileInput['name'], time() + 86400*1, "/");
            setcookie("file", "Justine", time() + 86400, "/");
            setcookie("file", "", time() - 1);
            //SESSION
            
            echo "SESSION: " . $_SESSION["name"] . "<br><br>";
            session_unset();
            session_destroy();
            if (session_status() === PHP_SESSION_NONE) {
                echo "Session is destroyed.<br><br>";
            }
        }
    ?>

    <img src="<?php echo $destination ?>" alt="Girl in a jacket">



</body>
</html>