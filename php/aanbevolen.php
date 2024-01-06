<?php
// Verbinding maken met de database (gebruik hier je eigen databasegegevens)
$servername = "localhost";
$username = "root";
$password = "Lovinadolfijn123!@";
$dbname = "nerdy_gadgets";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query om de meest bestelde producten op te halen


$query = "SELECT product.id, product.name, product.image, COUNT(order_item.product_id) AS aantal_bestellingen
          FROM `order`
          JOIN order_item ON `order`.id = order_item.order_id
          JOIN product ON order_item.product_id = product.id
          GROUP BY product.id
          ORDER BY aantal_bestellingen DESC
          LIMIT 5";



$result = $conn->query($query);

// Verwerk de resultaten

$row = $result->fetch_assoc();

// Sla de informatie op in variabelen
$mostOrderedProductId = $row['id'];
$mostOrderedProductName = $row['name'];
$mostOrderedProductImage = $row['image'];
$mostOrderedProductOrders = $row['aantal_bestellingen'];

$row = $result->fetch_assoc();
$mostOrderedProductId2 = $row['id'];
$mostOrderedProductName2 = $row['name'];
$mostOrderedProductImage2 = $row['image'];
$mostOrderedProductOrders2 = $row['aantal_bestellingen'];

// Haal de derde rij op (het derde meest bestelde product)
$row = $result->fetch_assoc();
$mostOrderedProductId3 = $row['id'];
$mostOrderedProductName3 = $row['name'];
$mostOrderedProductImage3 = $row['image'];
$mostOrderedProductOrders3 = $row['aantal_bestellingen'];

$row = $result->fetch_assoc();
$mostOrderedProductId4 = $row['id'];
$mostOrderedProductName4 = $row['name'];
$mostOrderedProductImage4 = $row['image'];
$mostOrderedProductOrders4 = $row['aantal_bestellingen'];

$row = $result->fetch_assoc();
$mostOrderedProductId5 = $row['id'];
$mostOrderedProductName5 = $row['name'];
$mostOrderedProductImage5 = $row['image'];
$mostOrderedProductOrders5 = $row['aantal_bestellingen'];




// Sluit de databaseverbinding
$conn->close();



