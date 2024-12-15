<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Listings</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="logout-container">
        <button class="logout-btn">Logout</button>
        <script src="logout.js"></script>
    </div>
    
    <main class="main-container">
        <div class="listings-header">
            <h2>Your Listings:</h2>
        </div>
        <div class="listings-container">
            <div class="listing-item">
                <div class="image-placeholder">image</div>
                <div class="listing-info">
                    <p>Address-------------------</p>
                    <p>Price</p>
                </div>
            </div>
            <div class="listing-item">
                <div class="image-placeholder">image</div>
                <div class="listing-info">
                    <p>Address-------------------</p>
                    <p>Price</p>
                </div>
            </div>
        </div>
        <button class="add-btn">Add New</button>
    </main>
</body>
</html>
