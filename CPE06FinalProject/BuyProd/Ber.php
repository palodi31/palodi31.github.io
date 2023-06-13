<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpe06";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$contactNumber = $_POST['contact_number'];
$productBought = $_POST['productBought'];
$deliveryAddress = $_POST['DeliveryAddress'];
$feedback = $_POST['feedback'];

$stmt = $conn->prepare("INSERT INTO checkout (name, address, email, contact_number, product_bought, delivery_address, feedback) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $address, $email, $contactNumber, $productBought, $deliveryAddress, $feedback);

if ($stmt->execute()) {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data Submitted Succesfully")';  
    echo '</script>';  

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
