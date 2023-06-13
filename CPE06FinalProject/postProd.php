<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpe06";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$productName = $_POST['product-name'];
$productDescription = $_POST['product-description'];
$productImage = $_FILES['product-image']['name']; 
$productPrice = $_POST['product-price'];
$sellerName = $_POST['seller-name'];
$sellerID = $_POST['seller-id'];
$sellerLocation = $_POST['seller-location'];

$targetDirectory = "uploads/";
$targetFile = $targetDirectory . basename($_FILES['product-image']['name']);
move_uploaded_file($_FILES['product-image']['tmp_name'], $targetFile);

$stmt = $conn->prepare("INSERT INTO products (product_name, product_description, product_image, product_price, seller_name, seller_id, seller_location) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssdsss", $productName, $productDescription, $productImage, $productPrice, $sellerName, $sellerID, $sellerLocation);

if ($stmt->execute()) {
    echo "Product added successfully.";

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
