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

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Nerdy Gadgets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/products.css">

</head>
<body>

<!-- Navbar -->
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
                <a class="nav-link" href="html/producten.html"> Producten <span class="sr-only">(current)</span></a>
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

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <div style="background-color: #230536; color: #fff; padding: 20px; text-align: center;">
            <h1 class="display-4">The Gadgets</h1>
            <p class="lead">Explore our amazing gadgets.</p>

            <!-- productfilters -->
            <div class="container text-left">
                <div style="background-color: #230536; color: #fff; padding: 20px; text-align: left;">
                    <p class="lead">productfilters.</p>
                    <form>
                        <form method="GET" action="productpagina.php">
                            categorie: <input type="checkbox" name="productsoort" value= "laptops" > laptops
                            <input type="checkbox" name="productsoort" value="phones" > phones
                            <input type="checkbox" name="productsoort" value="opslag"> opslag
                            <input type="checkbox" name="productsoort" value="routers"> routers
                            <input type="checkbox" name="productsoort" value="componenten"> componenten
                            <input type="checkbox" name="productsoort" value="desktops"> desktops
                            <br>
                            prijs: <input type="checkbox" name="prijsklasse" value="laag" > tot 100
                            <input type="checkbox" name="prijsklasse" value="midden" > 100 tot 250
                            <input type="checkbox" name="prijsklasse" value="hoog" > boven de 250
                            <br>

                            producten sorteren op: <select name="sort" id="sorteren" >
                                <option value="cat">categorie</option>
                                <option value="lprijs">prijs van laag naar hoog</option>
                                <option value="hprijs">prijs van hoog naar laag</option>
                                <option value="populair">populair</option>

                            </select>
                            <div class="container text-right">
                                <div style="background-color: #230536; color: #fff; padding: 20px; text-align: right;">
                                    <input type="submit" name="submit" value="Keuze bevestigen">
                                    <br>
                                    <input type="reset" value="filters resetten">-+

                                    <form>

                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$sort = isset($_GET['sort']) ? $_GET['sort'] : '';

if ($sort == "lprijs"){
    $query = $sorteer;
} else if($sort == "hprijs"){
    $query = $sorteerhoog;
} else if($sort == "cat"){
    $query = "SELECT * FROM product ORDER BY category";
} else if($sort == "populair"){
    $query = $populair;
} else {
    $query = $populair;
}

?>
<!-- Product Grid -->

<?php
$result = $conn->query($query);
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo
            '<section class="container my-5">
            <div class="row mb-4">
            <div class="col-lg-4">
              <div class="card">

                <img src="productimages/'.$row["image"].'.jpg" class="card-img-top" alt="pc">
                <div class="card-body">
                  <h5 class="card-title"> '.$row["name"].'</h5>
                  <p class="card-text">'. substr($row["description"],0,50)."...".'</p>
                  <span class="product-price"> <strong>'."€". $row["price"].'-</strong> </span>
                  <a href="html/shoppingcart.html" class="btn btn-primary float-right"> Toevoegen aan winkelwagen </a>
                </div>
              </div>
            </div> 
            </div>
            
            </section>
            ';
    }
} else {
    echo "<br>No results found<br>";} ?>

</body>
<!-- Footer -->
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
