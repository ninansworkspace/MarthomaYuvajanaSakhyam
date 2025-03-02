<?php
// Database Connection
$servername = "localhost";
$username = "root"; // Change if different
$password = ""; // Change if set
$dbname = "yuvajana_db";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL Query to Create Table
$sql = "CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(20),
    dob DATE,
    parish VARCHAR(255),
    address TEXT,
    members INT,
    amount DECIMAL(10,2),
    payment_id VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute Query
if ($conn->query($sql) === TRUE) {
    echo "Table Created Successfully!";
} else {
    echo "Error: " . $conn->error;
}

// Close Connection
$conn->close();
?>
