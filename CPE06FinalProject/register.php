<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpe06";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sellerName = $_POST['sellerName'];
$sellerID = $_POST['sellerID'];
$location = $_POST['location'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("INSERT INTO sellers (seller_name, seller_username, location, email, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $sellerName, $sellerID, $location, $email, $password);

if ($stmt->execute()) {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Registration Successful!")';  
    echo '</script>';  

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
