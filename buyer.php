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
            <form action="search.php" method="GET">
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
            $user = "mali50"; 
            $pass = "mali50"; 
            $dbname = "mali50"; 
            
            $conn = new mysqli($host, $user, $pass, $dbname);
            
            $sql = "SELECT id, address, price, image_1 FROM listings";
            $result = $conn->query($sql);   
           $listings = [];
           if ($result && $result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
                   $listings[] = $row; 
               }
           } else {
               echo "No listings found.";
           }
           

            foreach ($listings as $listing): ?>
                <div class="listing-item">
                    <div class="image-placeholder">
                    <img src="<?= htmlspecialchars($listing['image_1']); ?>" alt="Property Image">
                    </div>
                    <div class="listing-info">
                        <p><?= htmlspecialchars($listing['address']); ?></p>
                        <p><?= htmlspecialchars($listing['price']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
