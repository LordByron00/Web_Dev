<?php
    session_start();
    include_once "config.php";
    $sqlGetUsers = $con_DB->query("SELECT * FROM users WHERE NOT unique_id = {$_SESSION['user']}");
    
    if ($sqlGetUsers->num_rows > 0) {
        echo json_encode($sqlGetUsers->fetch_all()); 
    } else {
        echo "[]";
    }










    // if ($sqlGetUsers->num_rows > 0) {
    //     while($row = $sqlGetUsers->fetch_assoc()) {
    //         $response .= <<<EOD
    //         <div class="user">
    //         <img src="https://picsum.photos/100/100" alt="John Doe">
    //         <div class="unique_id" hidden>{$row['unique_id']}</div>
    //             <div class="user-info">
        //             <div class="name">{$row['firstname']} {$row['lastname']}</div>
        //             <div class="status">{$row['status']}</div>
    //             </div>
    //         </div>
    //     EOD;
    //     }
    // } else {
    //     $response = "No available users";
    // }
