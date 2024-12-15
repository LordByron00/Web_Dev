<?php
    session_start();
    $userData0 = array(
        'name' => 'Justine',
        'checked' => false,
    );

    $userData1 = array(
        'name' => 'Lelouch',
        'checked' => false,
    );

    $userData2 = array(
        'name' => 'Luciferous',
        'checked' => false,
    );

    $_SESSION['person'] = array($userData0, $userData1, $userData2);
?>