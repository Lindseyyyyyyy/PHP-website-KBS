<?php

include_once 'databaseconnectie.php';
global $conn;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include 'functions.php';
include_once 'variables.php';
global $orderid;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productid = $_POST["id"];
    $quantity = $_POST["quantity"];

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



