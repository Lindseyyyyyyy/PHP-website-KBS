<?php
include_once 'db_connection.php';
global $conn;

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query om de meest bestelde producten op te halen


$query = "SELECT product.id, product.name, product.image, COUNT(order_item.product_id) AS aantal_bestellingen
          FROM `orders`
          JOIN order_item ON `orders`.id = order_item.order_id
          JOIN product ON order_item.product_id = product.id
          GROUP BY product.id
          ORDER BY aantal_bestellingen DESC
          LIMIT 5";



$result = $conn->query($query);

// Verwerk de resultaten

$conn->close();



