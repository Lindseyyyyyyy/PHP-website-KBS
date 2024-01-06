<?php
$host = "localhost";
$username = "root";
$password = "Lovinadolfijn123!@";
$database = "nerdy_gadgets";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Fout bij het verbinden met de database: " . mysqli_connect_error());
} else {
    echo "Verbinding met de database is succesvol.";
}

mysqli_close($conn);
?>