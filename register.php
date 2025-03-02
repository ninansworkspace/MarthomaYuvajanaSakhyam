<?php
// Database Connection
$servername = "localhost";
$username = "root"; // Change if different
$password = ""; // Change if set
$dbname = "yuvajana_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get Form Data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$parish = $_POST['parish'];
$address = $_POST['address'];
$members = $_POST['members'];
$amount = $_POST['amount'];
$payment_id = $_POST['payment_id'];

// Insert Data into Database
$sql = "INSERT INTO members (full_name, email, phone, dob, parish, address, members, amount, payment_id) 
        VALUES ('$name', '$email', '$phone', '$dob', '$parish', '$address', '$members', '$amount', '$payment_id')";

if ($conn->query($sql) === TRUE) {
    echo "Registration Successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
