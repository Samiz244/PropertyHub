<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>

    <?php include 'header.php'; ?>

   
    <div class="logout-container">
        <button class="logout-btn">Logout</button>
    </div>

    
    
   
    <?php
    $host = "localhost"; 
    $user = "jmize6"; 
    $pass = "jmize6"; 
    $dbname = "jmize6"; 
    $conn = new mysqli($host, $user, $pass, $dbname);
    
    
    $id = $_GET['id']; 
    $query = "SELECT * FROM listings WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
    <main class="property-details">
        <div class="property-header">
            <p class="property-address">Address: <?php echo $row['address']; ?></p>
            <p class="property-price">Asking Price: $<?php echo number_format($row['price']); ?></p>
        </div>

        <div class="property-images">
            <?php for ($i = 1; $i <= 6; $i++) {
                if (!empty($row["image_$i"])) {
                    echo '<div class="image-placeholder">
                              <img src="' . $row["image_$i"] . '" alt="Property Image">
                          </div>';
                }
            } ?>
        </div>

        <div class="property-info">
            <div class="info-box">
                <h3>Seller's Description</h3>
                <p><?php echo $row['description']; ?></p>
            </div>
            <div class="info-box">
                <h3>Property Details</h3>
                <p>Bedrooms: <?php echo $row['bed_count']; ?><br>
                Bathrooms: <?php echo $row['bath_count']; ?></p>
            </div>
            <div class="info-box">
                <h3>Seller Contact Info</h3>
                <p>Name: <?php echo $row['seller_name']; ?><br>
                Email: <?php echo $row['seller_email']; ?></p>
            </div>
        </div>
    </main>
    <?php
    } else {
        echo "<p>Property not found.</p>";
    }
    ?>
    
 
    
</body>
</html>
