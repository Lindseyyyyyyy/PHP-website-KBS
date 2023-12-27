
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

$id = isset($_GET['id']) ? $_GET['id'] : '';

$query = "SELECT * FROM product WHERE id = $id ";


$category = "SELECT * 
FROM product
WHERE category in ('opslag', 'routers')";

$result = $conn->query($query);
$row = $row = $result->fetch_assoc();


if ($result->num_rows > 0) {
    echo "hello dit is het product waar je op hebt gedrukt. De id is" .$row["id"]. "dit moet het zelfde zijn als" . $_GET["id"]. "<br>". " de naam van het product is". $row["name"]."<br>". "de omschrijving is". $row["description"]."<br>". "en het product kost". $row["price"]. " euro";
}

; ?>!

</body>
</html>