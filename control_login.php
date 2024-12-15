<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php session_start(); ?>

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
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $account_type =$_POST['account_type'];

    $command = "SELECT * FROM validate_user WHERE username = '$username' AND password = '$password'";

$result = $conn->query($command);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    if ($row['account_type'] == 'Buyer') {
        $_SESSION['username'] = $username;
        header("Location:buyer.php");
        exit();
    } elseif ($row['account_type'] == 'Seller') {
        header("Location:sellerpage.php");
        exit();
    }
} else {
    echo "Wrong username or password.";
}

$conn->close();
}

 ?>   
</body>
</html>