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
    <?php include 'header.php'; ?>
    
    <div class="logout-container">
        <button class="logout-btn">Logout</button>
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
            // Example listings array; replace with database query
            $listings = [
                ['image' => 'image1.png', 'address' => '123 Main St', 'price' => '$1000'],
                ['image' => 'image2.png', 'address' => '456 Elm St', 'price' => '$1200'],
                ['image' => 'image3.png', 'address' => '789 Pine St', 'price' => '$900'],
                ['image' => 'image4.png', 'address' => '101 Maple St', 'price' => '$1500'],
                ['image' => 'image5.png', 'address' => '202 Oak St', 'price' => '$1100'],
                ['image' => 'image6.png', 'address' => '303 Cedar St', 'price' => '$1300'],
            ];

            foreach ($listings as $listing): ?>
                <div class="listing-item">
                    <div class="image-placeholder">
                        <img src="<?= htmlspecialchars($listing['image']); ?>" alt="Property Image">
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
