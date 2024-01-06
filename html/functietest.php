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
include 'functions.php';
$orderid = 600;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productid = 9;
    $quantity = $_POST["quantity"];
    echo $orderid ." ". $productid ." ". $quantity;
if (toevoegen($orderid,$productid,$quantity)){
    echo " product toegevoegd aan winkelwagen";
}else {
    echo "er ging iets mis :(";
}
}
?>

<form method='post' action='functietest.php'>
    <input type='number' name='quantity' id='quantity' min='1' value='1'> aantal
    <input type='submit' value='toevoegen aan winkelwagen'>

</form> </div></div>";

