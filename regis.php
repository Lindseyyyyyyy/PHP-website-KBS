
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nerdy Gadgets</title>
    <meta charset="UTF-8">
</head>
<body style="background-color: #4b0082;">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/aanbevolen.css">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="home.html"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.html"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productpagina.php"> Producten </a>
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

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <div style="background-color: #230536; color: #fff; padding: 20px; text-align: center;">
            <h1 class="display-4">Registreren</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $ww = $_POST['psw'];
            $vnaam = $_POST['vnaam'];
            $tussen = $_POST['tussen'];
            $anaam = $_POST['anaam'];
            $straat = $_POST['straat'];
            $huis = $_POST['huis'];
            $postcode = $_POST['postcode'];
            $stad = $_POST['stad'];

            if (empty($email) || empty($ww) || empty($vnaam) || empty($anaam) || empty($straat) || empty($huis) || empty($postcode) || empty($stad)) {
            echo "Please fill in all required fields.";
            } else {
            $regis = $conn->prepare("INSERT INTO user (email, password, first_name, surname_prefix, surname, street_name, apartment_nr, postal_code, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $regis->bind_param("ssssssiss", $email, $ww, $vnaam, $tussen, $anaam, $straat, $huis, $postcode, $stad);
            }
            if ($regis->execute()) {
            echo "Welkom!, uw account is succesvol aangemaakt";
            } else {
            echo "Er ging helaas iets mis. Error: " . $regis->error;
            }

            $regis->close();
            }
            $conn->close(); ?>
</div>
<form method="post" action="regis.php">
  <div class="container1">
      <div style="background-color: #FFFFFF; color: #230536">
    <p>Vul uw gegevens in om een account aan te maken. Velden met een * zijn verplicht. </p>

    <hr>
              <label for="email"><b>E-mail*</b></label>
              <input type="text" placeholder="Bijv. nerdygadgetklant@hotmail.com" name="email" id="email" required >

              <label for="voornaam"><b>Voornaam*</b></label>
              <input type="text" placeholder="Vul uw voornaam in" name="vnaam" id="voornaam" required>

              <label for="Tussenvoegsel"><b>Tussenvoegsel</b></label>
              <input type="text" placeholder="Voer uw eventuele tussenvoegsel in" name="tussen" id="Tussenvoegsel">

              <label for="Achternaam"><b>Achternaam*</b></label>
              <input type="text" placeholder="Vul uw achternaam in" name="anaam" id="Achternaam" required>

              <label for="Straatnaam"><b>Straatnaam*</b></label>
              <input type="text" placeholder="Bijv. computerstraat" name="straat" id="Straatnaam" required>

              <label for="Huisnummer"><b>Huisnummer*</b></label>
              <input type="text" placeholder="Vul uw huisnummer in" name="huis" id="Huisnummer" required>

              <label for="Postcode"><b>Postcode*</b></label>
              <input type="text" placeholder="zoals 1234AB" name="postcode" id="Postcode" maxlength="6" required>

              <label for="Stad"><b>Stad*</b></label>
              <input type="text" placeholder="Voer uw stad in" name="stad" id="Stad" required>

              <label for="psw"><b>Wachtwoord*</b></label>
              <input type="password" placeholder="Voer Wachtwoord in" name="psw" id="psw" required>

              <hr>
              <p>Door een account aan te maken ga je akkoord met onze <a href="#">Algemene voorwaarden en Privacybeleid</a>.</p>

              <button type="submit" class="registerbtn">Registreer</button>
          </div>

          <div class="container signin">
              <p>Heb je al een account? <a href="html/inlogversie.html">Log hier in!</a>.</p>
          </div>
      </form>
</div>
        </div>
</body>

<footer class="footer">
    <div class="container">
        <p>&copy; 2023 Nerdy Gadgets</p>
    </div>
</footer>