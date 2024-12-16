<?php
$host = "localhost"; 
$user = "mali50"; 
$pass = "mali50"; 
$dbname = "mali50"; 

// Create a connection to MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$listings_images = [
    1 => [ // Listing ID 1
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/1.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/2.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/3.jpg",
        "image_4" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/4.jpg",
        "image_5" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/5.jpg",
        "image_6" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/6.jpg"
    ],
    2 => [ // Listing ID 2
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/21.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/22.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/23.jpg",
    ],
    3 => [ // Listing ID 3
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/31.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/32.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/33.jpg",
    ],
    4 => [ // Listing ID 3
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/41.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/42.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/43.jpg",
    ],
    5 => [ // Listing ID 3
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/51.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/52.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/53.jpg",
    ],
    6 => [ 
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/61.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/62.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/63.jpg",
    ],
    7 => [ 
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/71.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/72.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/73.jpg",
    ],
    8 => [
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/81.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/82.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/83.jpg",
    ],
    9 => [ 
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/91.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/92.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/93.jpg",
    ],
    0 => [ 
        "image_1" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/101.jpg",
        "image_2" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/102.jpg",
        "image_3" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/103.jpg",
        "image_4" => "https://codd.cs.gsu.edu/~jmize6/PropertyHub/images/104.jpg"
    ],
    
];

foreach ($listings_images as $listing_id => $images) {
    $image_1 = isset($images['image_1']) ? $images['image_1'] : NULL;
    $image_2 = isset($images['image_2']) ? $images['image_2'] : NULL;
    $image_3 = isset($images['image_3']) ? $images['image_3'] : NULL;
    $image_4 = isset($images['image_4']) ? $images['image_4'] : NULL;
    $image_5 = isset($images['image_5']) ? $images['image_5'] : NULL;
    $image_6 = isset($images['image_6']) ? $images['image_6'] : NULL;

    // SQL to update the images for this listing
    $sql = "UPDATE listings SET 
            image_1 = '$image_1',
            image_2 = '$image_2',
            image_3 = '$image_3',
            image_4 = '$image_4',
            image_5 = '$image_5',
            image_6 = '$image_6'
            WHERE id = $listing_id";

    if ($conn->query($sql) === TRUE) {
        echo "Images updated for listing ID $listing_id successfully.\n";
    } else {
        echo "Error updating images for listing ID $listing_id: " . $conn->error . "\n";
    }
}

// Close the database connection
$conn->close();
?>
