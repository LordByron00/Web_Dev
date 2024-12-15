<?php
    // session_start();
    if (isset($_POST['checkbox'])) {
        foreach($_POST['checkbox'] as $index => $value) {
            if (isset($_SESSION['list'][$index])) {
                $_SESSION['list'][$index]['checked'] = $value;
            }
        }
    } else {
        foreach ($_SESSION['list'] as $key => $value) {
            $_SESSION['list'][$key]['checked'] = false;
        }
    }
?>