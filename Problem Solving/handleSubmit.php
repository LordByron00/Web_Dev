<?php 
    session_start();
    if(isset($_POST['chk'])) {
        // print_r($_SESSION['person']);
        // echo "<br>";
        foreach ($_SESSION['person'] as $key => $value) {
            // echo "<br>";
            if (isset($_POST['chk'][$key])) {
                $_SESSION['person'][$key]['checked'] = true;
            } else {
                $_SESSION['person'][$key]['checked'] = false;
            }
        }
        // print_r($_SESSION['person']);
    } else {
        foreach ($_SESSION['person'] as $key => $value) {
            $_SESSION['person'][$key]['checked'] = false;
        }
        // echo 'No set';
    }
?>