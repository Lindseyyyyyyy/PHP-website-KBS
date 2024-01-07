<?php

include_once 'databaseconnectie.php';
global $conn;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include_once 'variables.php';
global $orderid;

$gebruiker = $orderid;

$order = "select I.order_id, I.product_id,P.id, I.quantity, P.name, P.price
from product as P
join order_item as I on I.product_id = P.id
join orders as O on I.order_id = O.id
join user as U on O.user_id = U.id
Where order_id = $gebruiker";


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
    <a class="navbar-brand" href="html/home.html"><img src="Goedeimages/LogoNG.png" alt="Logo" height="70" width="90"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="html/home.html"> Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productpagina.php"> Producten <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="html/contact.html"> Contact </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="wagentje.php"> Winkelwagen</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
        <h2 class="cart-header" style="color: #FFFFFF; position: relative" size="relative"></h2> winkelwagen


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
        <form method="get" action="wagentje.php">
        <label for="coupon-input">Couponcode:</label>
        <input type="text" id="coupon-input" name="coupon" placeholder="Voer je couponcode in">
        <input type="submit" value="toepassen"> <br> *er kan maximaal 1 coupon worden gebruikt per bestelling
        </form>
        <?php $korting = FALSE;
        $code = "EASTEREGG17";
        $input = isset($_GET['coupon']) ? $_GET['coupon'] : '';
        if ($input == $code){
            $korting = TRUE;
        }
        ?>


    </div>

    <div id="total-section">
        <p>Subtotaal: <?php echo $p. " euro"; ?></p>
        <p>Korting: <?php $egg = 0;
            if($korting){
            $egg = $p * 0.1;}
            echo $egg. " euro";
          ?></p>
        <p>Totaal: <?php echo $p - $egg. " euro"?></p> <br>
        <a href="html/betalen.html" class="btn btn-primary float-right">Bestellen!</a>
    </div>

    <!-- betaalpagina link -->

</div>
    </div>
</body>
</html>

<?php $conn->close(); ?>