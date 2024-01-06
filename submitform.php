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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productid = $_POST["id"];
    $quantity = $_POST["quantity"];
    echo $orderid ." ". $productid ." ". $quantity;

    if (toevoegen($orderid,$productid,$quantity)){
       $bericht = " product is toegevoegd aan winkelwagen";
    }else {
        $bericht = "er ging iets mis :(";
    }

    if (isset($bericht)) {
        header("Location: pdetail.php?id=$productid&bericht=$bericht");
    } else {
        header("Location: pdetail.php?id=$productid");
    }
    exit();
}
?>



