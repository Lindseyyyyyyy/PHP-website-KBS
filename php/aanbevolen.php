<?php
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

$conn->close();



