<!DOCTYPE html>
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
                <a class="nav-link" href="home.html"> Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="productpagina.php"> Producten <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="html/contact.html"> Contact </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="wagentje.php"> Winkelwagen</a>
            </li>
        </ul>
    </div>
</nav>

<?php


include_once 'databaseconnectie.php';
global $conn;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include 'functions.php';
include_once 'variables.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

$id = isset($_GET['id']) ? $_GET['id'] : '';
$bericht = isset($_GET['bericht']) ? $_GET['bericht']: '';

$query = "SELECT * FROM product WHERE id = $id ";
$result = $conn->query($query);
$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    echo " <html> <div class='jumbotron jumbotron-fluid'>
    <div class='container text-center'>
        <div style='background-color: #230536; color: #fff; padding: 20px; text-align: center;'>
            <h1 class='display-4'>". $row["name"]."</h1>
            <img src='productimages/".$row["image"].".jpg' alt='image'>
            <div class='container text-left'>
                <div style='background-color: #fff; color: #230536; padding: 20px; text-align: center;'>" . $row["description"]."
                <br><div class='container-sm' > <div style='color: #000000; font-weight: normal; font-style: oblique; background-color: #FFFFFF; font-size: large'> ". $row["price"]. " euro 
                </div></div>";

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

<form method='post' action='submitform.php'>
<input type='number' name='quantity' id='quantity' min='1' max='15' value='1'> aantal
    <input type='hidden' name='id' value='<?php echo $id; ?>'>
<input type='submit' value='toevoegen aan winkelwagen'>

    <?php if (!empty($bericht)) {
        echo "<br><div class='container-sm' > <div style='color: #000000; font-weight: bold; font-style: oblique; background-color: #FFFFFF; font-size: large'>".$bericht." </div></div>";
    }?>

</form><section class="container my-5">
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
                  <span class="product-price"> <strong>'."€". $rij["price"]. '-</strong> </span>               
                  <a href="http://localhost/KBSnerdygadgets/pdetail.php?id='.$rij["id"].'"> toevoegen aan winkelwagen </a>
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
                <a href="eggjulie.php" class="btn btn-primary float-right"> Toevoegen aan winkelwagen </a>
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