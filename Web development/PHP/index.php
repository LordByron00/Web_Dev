<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    
   
    <?php 
        $name = $email = $website = $comment = $gender = "";
        $nameErr = $emailErr = $websiteErr = $genderErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['name'])) {
                $nameErr = "Name is required!";
            } else {
                $name = test_Input($_POST['name']);
            }
            if (empty($_POST['email'])) {
                $emailErr = "Email is required!";
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid E-mail format.";
            } else {
                $email = test_Input($_POST['email']);
            }
            $pattern = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
            if (!preg_match($pattern, $_POST['website'])) {
                $websiteErr = "Invalid URL";
              } else {
                $website = test_Input($_POST['website']);
              }
            if (empty($_POST['gender'])) {
                $genderErr = "gender is required!";
            } else {
                $gender = test_Input($_POST['gender']);
            }
            
            $comment = test_Input($_POST['comment']);
            
        }
        
        
        function test_Input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
    ?>
    <h2>PHP VALIDATION</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">'
        <span class="error">*<?php echo $nameErr;?></span><br><br>
        E-mail: <input type="text" name="email">
        <span class="error">*<?php echo $emailErr;?></span><br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span><br><br>
        Comment: <br><textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">*<?php echo $genderErr;?></span><br><br>
        <input type="submit">
    </form>
    <?php
        echo "<h3>YOUR INPUT: </h3>";   
         echo $name . "<br>";
         echo $email . "<br>";
         echo $website . "<br>";
         echo $comment . "<br>";
         echo $gender . "<br>";
    ?>

    <?php 
        $readFile = fopen("PHP.txt", "r");
        while (!feof($readFile)) {
            echo fgets($readFile) . "<br>";
        }
    ?>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
        SELECT IMAGE TO UPLPOAD:
        <input type="file" name="fileUpload" id="fileUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <?php 
        $_SESSION["name"] = "Luciferous";
    ?>
</body>

</html>