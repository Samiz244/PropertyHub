<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$host = "localhost"; 
$user = "mali50"; 
$pass = "mali50"; 
$dbname = "mali50"; 

$conn = new mysqli($host, $user, $pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE validate_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    account_type VARCHAR(50) NOT NULL
)";





if ($conn->query($sql) === TRUE) {
    echo "Table 'validate_user' created successfully.\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}


$conn->close();
?>

</body>
</html>