<?php
    include 'config.php';

    $sqlGetData = "SELECT * FROM products";
    $dataSQL = $conn->query($sqlGetData);
    if ($dataSQL->num_rows > 0) {
        $data = $dataSQL->fetch_all(MYSQLI_ASSOC);
        echo json_encode(['success' => true, 'productData' => $data]);
    } else {
        echo json_encode(['success' => false]);
    }
?>