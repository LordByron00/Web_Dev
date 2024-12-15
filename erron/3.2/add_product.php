<?php
include 'config.php';


$data = $_POST;
$name = $data['name'];
$brand = $data['brand'];
$image = $_FILES['image'];
$type = $data['type'];
$quantity = $data['quantity'];
$price = $data['price'];


// echo json_encode($data);

$imageSrc = $image['tmp_name'];
$originalFileName = $image['name'];
$extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
$imageDest = './Images/';
$randomIMGName = 'productIMG_' . uniqid() . '_' . rand(1000, 9999) . '.' . $extension;
$imageFullDest = $imageDest . $randomIMGName;

if (move_uploaded_file($imageSrc, $imageFullDest)) {
    $sql = "INSERT INTO products (name, brand, image, type, quantity, price) VALUES ('$name', '$brand', '$randomIMGName', '$type', '$quantity', '$price')";

    if ($conn->query($sql) === TRUE) {
        include 'get_product.php';
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $sql . ' - ' . $conn->error]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Error: File image download failed.']);
}


$conn->close();

?>