<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Page</title>
    <link rel="stylesheet" href="buyer.css">
</head>
<body>
    <!-- Header Section -->
    <?php
    session_start();

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    ?>
    <?php include 'header.php'; ?>
    
    
    <div class="logout-container">
        <button class="logout-btn">Logout</button>
        <script src="logout.js"></script>
    </div>
    <!-- Top Right Section -->
    <div class="top-right-section">
        <p class="welcome-message">Welcome, <?= htmlspecialchars($username); ?>!</p>
        <div class="search-container">
            <form action="search.php" method="post">
                <input type="text" name="query" placeholder="Search Properties..." class="search-input">
                <button type="submit" class="search-btn">></button>
            </form>
        </div>
    </div>

    <!-- Properties Section -->
    <main class="main-container">
        <div class="listings-container">
            <?php
           $host = "localhost"; 
           $user = "jmize6"; 
           $pass = "jmize6"; 
           $dbname = "jmize6"; 
           $conn = new mysqli($host, $user, $pass, $dbname);
           
            $query = "SELECT id, address, price, image_1 FROM listings";
            $result = $conn->query($query);
            
            if ($result->num_rows > 0) {
                echo "<div class='listings-container'>";
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $address = $row['address'];
                    $price = $row['price'];
                    $image = $row['image_1']; 
            
                    echo "<div class='listing-item'>
                            <a href='property.php?id=$id' class='listing-link'>
                                <div class='image-placeholder'>
                                    <img src='uploads/$image' alt='Listing Image'>
                                </div>
                                <div class='listing-info'>
                                    <p><strong>Address:</strong> $address</p>
                                    <p><strong>Price:</strong> $$price</p>
                                </div>
                            </a>
                          </div>";
                }
                echo "</div>";
            } else {
                echo "<p>No listings available.</p>";
            }
            ?>
            
        </div>
    </main>
</body>
</html>
