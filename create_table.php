<?php
$host = "localhost"; 
$user = "mali50"; 
$pass = "mali50"; 
$dbname = "mali50"; 

$conn = new mysqli($host, $user, $pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE listings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    address VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    bed_count INT NOT NULL,
    bath_count INT NOT NULL,
    description TEXT,
    seller_name VARCHAR(255) NOT NULL,
    seller_email VARCHAR(255) NOT NULL,
    image_1 VARCHAR(255),
    image_2 VARCHAR(255),
    image_3 VARCHAR(255),
    image_4 VARCHAR(255),
    image_5 VARCHAR(255),
    image_6 VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'listings' created successfully.\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}


$conn->close();
?>
