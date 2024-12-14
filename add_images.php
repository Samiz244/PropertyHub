<?php
$host = "localhost"; 
$user = "jmize6"; 
$pass = "jmize6"; 
$dbname = "jmize6"; 

// Create a connection to MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$listings_images = [
    1 => [ // Listing ID 1
        "image_1" => "https://images.homes.com/listings/116/4463097893-765806681/205-carson-rd-brooks-ga.jpg",
        "image_2" => "https://images.homes.com/listings/116/8763097893-765806681/205-carson-rd-brooks-ga-6.jpg",
        "image_3" => "https://images.homes.com/listings/116/5673097893-765806681/205-carson-rd-brooks-ga-14.jpg",
        "image_4" => "https://images.homes.com/listings/116/4973097893-765806681/205-carson-rd-brooks-ga-17.jpg",
        "image_5" => "https://images.homes.com/listings/116/8183097893-765806681/205-carson-rd-brooks-ga-20.jpg",
        "image_6" => "https://images.homes.com/listings/116/5783097893-765806681/205-carson-rd-brooks-ga-27.jpg"
    ],
    2 => [ // Listing ID 2
        "image_1" => "https://images.homes.com/listings/116/9483359904-743708091/1102-hip-pocket-rd-peachtree-city-ga.jpg",
        "image_2" => "https://images.homes.com/listings/116/7374359904-743708091/1102-hip-pocket-rd-peachtree-city-ga-6.jpg",
        "image_3" => "https://images.homes.com/listings/116/4537359904-743708091/1102-hip-pocket-rd-peachtree-city-ga-22.jpg",
    ],
    3 => [ // Listing ID 3
        "image_1" => "https://images.homes.com/listings/116/9195231004-237781781/306-brooke-wood-dr-peachtree-city-ga.jpg",
        "image_2" => "https://images.homes.com/listings/116/3106231004-237781781/306-brooke-wood-dr-peachtree-city-ga-8.jpg",
        "image_3" => "https://images.homes.com/listings/116/4306231004-237781781/306-brooke-wood-dr-peachtree-city-ga-13.jpg",
    ],
    4 => [ // Listing ID 3
        "image_1" => "https://images.homes.com/listings/116/1342537293-289920381/208-regester-way-peachtree-city-ga-unit-lot-43.jpg",
        "image_2" => "https://images.homes.com/listings/116/9152537293-289920381/208-regester-way-peachtree-city-ga-unit-lot-43-7.jpg",
        "image_3" => "https://images.homes.com/listings/116/5062537293-289920381/208-regester-way-peachtree-city-ga-unit-lot-43-16.jpg",
    ],
    5 => [ // Listing ID 3
        "image_1" => "https://images.homes.com/listings/116/5634421604-185233981/303-the-enclave-peachtree-city-ga.jpg",
        "image_2" => "https://images.homes.com/listings/116/4934421604-185233981/303-the-enclave-peachtree-city-ga-2.jpg",
        "image_3" => "https://images.homes.com/listings/116/9244421604-185233981/303-the-enclave-peachtree-city-ga-5.jpg",
    ],
    6 => [ 
        "image_1" => "https://images.homes.com/listings/116/4802357304-636899781/337-legacy-ln-peachtree-city-ga.jpg",
        "image_2" => "https://images.homes.com/listings/116/2122357304-636899781/337-legacy-ln-peachtree-city-ga-9.jpg",
        "image_3" => "https://images.homes.com/listings/116/0182357304-636899781/337-legacy-ln-peachtree-city-ga-12.jpg",
    ],
    7 => [ 
        "image_1" => "https://images.homes.com/listings/116/8438018493-211184481/102-maple-grove-terrace-peachtree-city-ga.jpg",
        "image_2" => "https://images.homes.com/listings/116/4458018493-211184481/102-maple-grove-terrace-peachtree-city-ga-6.jpg",
        "image_3" => "https://images.homes.com/listings/116/3658018493-211184481/102-maple-grove-terrace-peachtree-city-ga-7.jpg",
    ],
    8 => [
        "image_1" => "https://images.homes.com/listings/116/8190349783-312011081/12-fairway-ln-peachtree-city-ga.jpg",
        "image_2" => "https://images.homes.com/listings/116/9390349783-312011081/12-fairway-ln-peachtree-city-ga-6.jpg",
        "image_3" => "https://images.homes.com/listings/116/4590349783-312011081/12-fairway-ln-peachtree-city-ga-9.jpg",
    ],
    9 => [ 
        "image_1" => "https://images.homes.com/listings/116/7896548683-257778771/312-summer-place-peachtree-city-ga.jpg",
        "image_2" => "https://images.homes.com/listings/116/5207548683-257778771/312-summer-place-peachtree-city-ga-4.jpg",
        "image_3" => "https://images.homes.com/listings/116/4807548683-257778771/312-summer-place-peachtree-city-ga-10.jpg",
    ],
    0 => [ 
        "image_1" => "https://images.homes.com/listings/116/6680031604-860733981/126-braelinn-ct-peachtree-city-ga.jpg",
        "image_2" => "https://images.homes.com/listings/116/7190031604-860733981/126-braelinn-ct-peachtree-city-ga-4.jpg",
        "image_3" => "https://images.homes.com/listings/116/5790031604-860733981/126-braelinn-ct-peachtree-city-ga-10.jpg",
        "image_4" => "https://images.homes.com/listings/116/6001031604-860733981/126-braelinn-ct-peachtree-city-ga-13.jpg"
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
