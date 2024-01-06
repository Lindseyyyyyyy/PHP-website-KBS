<?php

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "nerdy_gadgets"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function toevoegen($order,$product,$aantal)
{
    global $conn;
    $insert = " INSERT INTO order_item(order_id, product_id, quantity) values(?,?,?)";
    $statement = $conn->prepare($insert);
    $statement->bind_param("iii", $order, $product, $aantal);

    if ($statement->execute()) {
        return true;
    } else {
        return false;
    }
}


?>

