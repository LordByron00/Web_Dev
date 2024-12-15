<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        header("location: loginpage.php");
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User List</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="user-list">
            <?php
            include_once "config.php";
            $user = $con_DB->query("SELECT * FROM users WHERE unique_id = {$_SESSION['user']}");
            if ($user->num_rows > 0) {
                $row = $user->fetch_assoc();
            }
            ?>
        <div class="content">
            <img src="<?php echo $row['img'] ?>" alt="John Doe">
            <div class="user-info">
                <div class="unique_id" hidden></div>
                <div class="name"><?php echo $row['firstname'] . " " . $row['lastname'] ?></div>
                <div class="status"><?php echo $row['status'] ?></div>
            </div>
            <a href="logout.php" class="logout">Logout</a>
        </div>
        <div class="search">
            <input type="text" placeholder="Search for friends...">
        </div>
        <div class="user-container">
            </div>
        </div>
        <script src="changePFP.js"></script>
        <script src="friend-data.js"></script>
    </body>
    </html>
    