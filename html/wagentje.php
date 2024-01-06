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
$gebruiker = 600;

$order = "select I.order_id, I.product_id,P.id, I.quantity, P.name, P.price
from product as P
join order_item as I on I.product_id = P.id
join orders as O on I.order_id = O.id
join user as U on O.user_id = U.id
Where order_id = 53";

$naam = "select U.first_name as 'voornaam'
from order_item as I 
join orders as O on I.order_id = O.id
join user as U on O.user_id = U.id
Where order_id = $gebruiker";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Winkelwagen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/shoppingcartpage.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="home.html"><img src="../Goedeimages/LogoNG.png" alt="Logo" height="70" width="90"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.html"> Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="producten.html"> Producten <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html"> Contact </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../kanhetweg/shoppingcart.html"> Winkelwagen</a>
            </li>
        </ul>
    </div>
</nav>

<body>
<header>
    <h1><?php
        $printnaam = $conn->query($naam);

if ($printnaam->num_rows > 0){
$hallo = $printnaam->fetch_assoc();
    echo "winkelwagen van " . $hallo["voornaam"];
} else
    echo "gast winkelwagen" ?> </h1>
</header>

<div class="container">
    <section id="products">
        <?php
        $p = 0;
        $result = $conn->query($order);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    echo'
        <div class="product" data-product-id="1">
            <h2>'.$row["name"].'</h2>
            <p>aantal = '.$row["quantity"].'.
            <br> prijs = '.$row["price"]. "  euro".'</p> 
            
            <button class="add-to-cart"> verwijderen uit winkelwagen</button>
        </div>';
    $p = $p + ($row["price"] * $row["quantity"]);
    }
}
    ?>   <!-- Voeg meer producten toe zoals nodig -->
    </section>

    <div id="coupon-section">
        <form method="get"; action="wagentje.php">
        <label for="coupon-input">Couponcode:</label>
        <input type="text" id="coupon-input" name="coupon" placeholder="Voer je couponcode in">
        <input type="submit"; value="toepassen" </input>
        </form>
        <?php $korting = FALSE;
        if(isset($_GET["coupon"]) == "EASTEREGG17"){
            $korting = TRUE;
        }
        ?>


    </div>

    <div id="total-section">
        <p>Subtotaal: <?php echo $p. " euro"; ?></p>
        <p>Korting: <?php $egg = 0;
            if($korting == TRUE){
            $egg = $p * 0.1;}
            echo $egg. " euro";
          ?></p>
        <p>Totaal: <?php echo $p - $egg. " euro"?></p>
    </div>

    <!-- betaalpagina link -->
    <a href="betalen.html" class="btn btn-primary float-right">Bestellen!</a>

</div>
</body>
</body>
<footer class="footer">
    <div class="container">
        <p>&copy; 2023 Nerdy Gadgets</p>
    </div>
</footer>
</html>

<?php $conn->close(); ?>