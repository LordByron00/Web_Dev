<?php
        session_start();
        if (!isset($_SESSION['list'])) {
            $_SESSION['list'] = array();
        }
        $error_message = '';
        if (isset($_POST['submit']) && !empty($_POST['new-item'])) {
            $item = $_POST['new-item'];
            if (!in_array($item, array_column($_SESSION['list'], 'name'))) {
                $_SESSION['list'][] = array(
                    'name' => $item,
                    'checked' =>
                        false
                );
            } else {
                $error_message = "Oops! It seems that $item is already in your travel list. Please enter a different destination.";
            }
        } elseif (isset($_POST['submit']) && empty($_POST['new-item'])) {
            $error_message = "Please type in your next destination.";
        }
        if (isset($_POST['remove'])) {
            unset($_SESSION['list'][$_POST['remove']]);
        }
        if (empty($_SESSION['list'])) {
            echo '<p id="message">Adventure awaits, add something to your travel list!</p>';
        } else {
            echo '<p>&nbsp;</p>';
        }

        
?>