
<html>
<body>
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
$query = "SELECT * FROM product ";
$sorteer = "SELECT * FROM product ORDER BY price";
$sorteerhoog= "SELECT * FROM product ORDER BY price DESC ";

$category = "SELECT * 
FROM product
WHERE category in ('opslag', 'routers')";

$populair= "SELECT product_id, SUM(quantity), P.*
FROM order_item as O
JOIN product as P on P.id = O.product_id
GROUP BY product_id
ORDER BY SUM(quantity) DESC";


?>

Welcome <?php echo $_GET["id"]; ?>!
de prijs is

</body>
</html>