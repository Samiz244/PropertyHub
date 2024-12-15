<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Houses</title>
    <link rel="stylesheet" href="buyer.css">
</head>
<body>

<?php session_start(); ?>

<?php
include 'header.php'; 
?>

<main class="main-container">
        <div class="listings-container">
    <?php 
    $host = "localhost"; 
    $user = "mali50"; 
    $pass = "mali50"; 
    $dbname = "mali50"; 
    
    $conn = new mysqli($host, $user, $pass, $dbname);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        
    }
    
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
            $search = $_POST['query'];
            $command = "SELECT * FROM listings WHERE address LIKE '%$search%' OR price LIKE '%$search%'";
            $result = $conn->query($command);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()){?>  
                    <div class="listing-item">
                <div class="image-placeholder">
                    <img src="<?= htmlspecialchars($row['image_1']); ?>" alt="Property Image">
                </div>
                <div class="listing-info">
                    <p><?= htmlspecialchars($row['address']); ?></p>
                    <p><?= htmlspecialchars($row['price']); ?></p>
                </div>
            </div>
            <?php
            }
        }
             else {
                echo "<p>No houses for that search.</p>";
            }
            $conn->close();
            ?>
    
        </div>
</main>
    
</body>
</html>