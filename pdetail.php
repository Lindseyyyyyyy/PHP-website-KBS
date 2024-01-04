
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Nerdy Gadgets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/products.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="html/home.html">Nerdy Gadgets</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="html/home.html"> Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="kanhetweg/producten.html"> Producten <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="html/contact.html"> Contact </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="html/shoppingcart.html"> Winkelwagen</a>
            </li>
        </ul>
    </div>
</nav>

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




$result = $conn->query($query);
$row = $result->fetch_assoc();


if ($result->num_rows > 0) {
    echo "hello dit is het product waar je op hebt gedrukt. De id is" .$row["id"]. "dit moet het zelfde zijn als" . $_GET["id"]. "<br>". " de naam van het product is". $row["name"]."<br>". "de omschrijving is". $row["description"]."<br>". "en het product kost". $row["price"]. " euro";
}
$soort = $row["category"];
$huidig = $row["name"];

$category = "SELECT product_id, SUM(quantity), P.*
FROM order_item as O
JOIN product as P on P.id = O.product_id
WHERE category = '$soort' AND name != ('$huidig')
GROUP BY product_id
ORDER BY SUM(quantity) DESC; " ;

$aanbevolen = $conn->query($category);
$rij = $aanbevolen->fetch_assoc();
?>

<section class="container my-5">
    <h5 class="card-title"> aanbevolen producten </h5><br>
    <div class="row mb-4">

<?php
if ($result->num_rows > 0) {
    // Output data of each row
    while ($rij = $aanbevolen->fetch_assoc()) {
        echo
            '<div class="col-lg-4">
              <div class="card"> 
                <img src="productimages/'.$rij["image"].'.jpg" class="card-img-top" alt="pc">
                <div class="card-body">
                  <h5 class="card-title"> '.$rij["name"]. ' </h5>
                  <a href="http://localhost/KBSnerdygadgets/pdetail.php?id='.$rij["id"].'"> klik hier om naar de productpagina te gaan </a>
                  <p class="card-text">'. substr($rij["description"],0,50)."...".'</p>
                  <span class="product-price"> <strong>'."€". $rij["price"].'-</strong> </span>
                  <a href="html/shoppingcart.html" class="btn btn-primary float-right"> Toevoegen aan winkelwagen </a>
                </div>
              </div>
            </div> 
            
            ';
    }
} else {
    echo "<br>geen aanbevolen producten<br>";}

?>

</div>
    <div class="col-lg-4">
        <div class="card">
            <img src="img/easteregg.webp" class="card-img-top" alt="pc">
            <div class="card-body">
                <h5 class="card-title"> supercoolerozecomputer 2.596 </h5>
                <a href="eggjulie.php"> klik hier om naar de productpagina te gaan </a>
                <p class="card-text"> jouw favoriete gadget </p>
                <span class="product-price"> <strong> $0,- </strong> </span>
                <a href="#" class="btn btn-primary float-right"> Toevoegen aan winkelwagen </a>
            </div>
        </div>
    </div>
</section>


</body>
<footer class="footer">
    <div class="container">
        <p>&copy; 2023 Nerdy Gadgets</p>
    </div>
</footer>

<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>

<?php
$conn ->close();
?>