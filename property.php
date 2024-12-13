<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <!-- Header Section -->
    <?php include 'header.php'; ?>

    <!-- Logout Button -->
    <div class="logout-container">
        <button class="logout-btn">Logout</button>
    </div>

    <!-- Property Details Section -->
    <main class="property-details">
        <!-- Address and Asking Price -->
        <div class="property-header">
            <p class="property-address">Address: 123 Main Street, Atlanta</p>
            <p class="property-price">Asking Price: $150,000</p>
        </div>

        <!-- Property Images -->
        <div class="property-images">
            <div class="image-placeholder">image</div>
            <div class="image-placeholder">image</div>
            <div class="image-placeholder">image</div>
            <div class="image-placeholder">image</div>
            <div class="image-placeholder">image</div>
            <div class="image-placeholder">image</div>
        </div>

        <!-- Property Details Boxes -->
        <div class="property-info">
            <div class="info-box">
                <h3>Seller's Description</h3>
                <p>This house is a cozy 3-bedroom, 2-bathroom property with a large backyard and spacious living room.</p>
            </div>
            <div class="info-box">
                <h3>Property Details</h3>
                <p>Sq footage: 1500 sqft<br> Bed & Bath Count: 3 beds, 2 baths<br> Proximity: Close to schools, grocery stores, and parking.</p>
            </div>
            <div class="info-box">
                <h3>Seller Contact Info</h3>
                <p>Username: seller123<br>Email: seller@example.com<br>Phone: (123) 456-7890</p>
            </div>
        </div>

        <!-- Seller Note -->
        <div class="seller-note">
            <p>If the account viewing the property is the seller of the property, they can edit these details or add/delete images.</p>
        </div>
    </main>
</body>
</html>
