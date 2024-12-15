<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'header.php'; 
?>
<?php
$host = "localhost"; 
$user = "mali50"; 
$pass = "mali50"; 
$dbname = "mali50"; 

$conn = new mysqli($host, $user, $pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $account_type = $_POST['account_type'];

    
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    $command = "INSERT INTO validate_user (username, email, password, account_type) 
              VALUES ('$username', '$email', '$password', '$account_type')";

if ($conn->query($command) === TRUE) {
    echo "Username and password saved successfully.\n";
    header("Location:login.php");


} else {
    echo "Error in saving username and password: " . $conn->error . "\n";
}


$conn->close();

}
?>


  
</body>
</html>