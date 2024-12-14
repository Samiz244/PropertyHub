<?php
$host = "localhost"; 
$user = "mali50"; 
$pass = "mali50"; 
$dbname = "mali50"; 


$conn = new mysqli($host, $user, $pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$addresses = [
    "123 Maple Street, Springfield",
    "456 Oak Avenue, Greenville",
    "789 Pine Road, Meadowbrook",
    "101 Elm Street, Riverside",
    "202 Cedar Lane, Brookfield",
    "303 Birch Drive, Summerville",
    "404 Aspen Way, Willow Creek",
    "505 Hickory Court, Lakewood",
    "606 Walnut Place, Fairview",
    "707 Chestnut Circle, Sunnyvale"
];

$descriptions = [
    "Beautiful single-family home with a spacious backyard and modern amenities.",
    "Cozy townhouse located in a quiet neighborhood, perfect for families.",
    "Recently renovated home with an open floor plan and plenty of natural light.",
    "Charming bungalow with a large front porch and landscaped garden.",
    "Luxury estate with a private pool, gourmet kitchen, and stunning views.",
    "Well-maintained home close to schools, parks, and shopping centers.",
    "Spacious two-story home with hardwood floors and a finished basement.",
    "Modern condo with high ceilings, stainless steel appliances, and a balcony.",
    "Classic colonial-style home with a fireplace and plenty of character.",
    "Affordable starter home with a fenced yard and updated appliances."
];

$sellers = [
    "John Doe",
    "Jane Smith",
    "Alice Johnson",
    "Bob Williams",
    "Carol Davis",
    "David Brown",
    "Emily Miller",
    "Frank Wilson",
    "Grace Taylor",
    "Henry Moore"
];

$seller_emails = [
    "john@example.com",
    "jane@example.com",
    "alice@example.com",
    "bob@example.com",
    "carol@example.com",
    "david@example.com",
    "emily@example.com",
    "frank@example.com",
    "grace@example.com",
    "henry@example.com"
];

$beds = [
    3,
    5,
    4,
    3,
    3,
    4,
    2,
    5,
    4,
    4
];

$baths = [
    2,
    4,
    3,
    2,
    2,
    2,
    1,
    3,
    2,
    3
];

$prices = [
    200000,
    380000,
    100000,
    190000,
    110000,
    125000,
    78000,
    430000,
    105000,
    228000
];




for ($i = 0; $i < 10; $i++) {
    $address = $addresses[$i];
    $price = $prices[$i];
    $bath_count = $baths[$i];
    $bed_count = $beds[$i];
    $description = $descriptions[$i];
    $seller_name = $sellers[$i];
    $seller_email = $seller_emails[$i];

    $sql = "INSERT INTO listings (address, price, bed_count, bath_count, description, seller_name, seller_email) 
            VALUES ('$address', $price, $bed_count, $bath_count, '$description', '$seller_name', '$seller_email')";

    if ($conn->query($sql) === TRUE) {
        echo "Listing $i inserted successfully.\n";
    } else {
        echo "Error inserting listing $i: " . $conn->error . "\n";
    }
}


$conn->close();
?>
