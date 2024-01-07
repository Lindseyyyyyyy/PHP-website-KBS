<?php
include_once 'databaseconnectie.php';
global $conn;


$orderid = 54;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = isset($_POST['email']) ? $_POST['email'] : "";
    $password = isset($_POST['psw']) ? $_POST['psw'] : "";

    echo "hello";
}

?>