
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
            echo "Welkom meneer, uw account is succesvol aangemaakt";
        } else {
            echo "Er ging helaas iets mis. Error: " . $regis->error;
        }

        $regis->close();
}
$conn->close()
?>
<form method="post" action="logintest.php">
  <div class="container1">
    <h1>Registreer</h1>
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

              <label for="Straatnaam"><b>Straatnaam</b></label>
              <input type="text" placeholder="Bijv. computerstraat" name="straat" id="Straatnaam" required>

              <label for="Huisnummer"><b>Huisnummer</b></label>
              <input type="text" placeholder="Vul uw huisnummer in" name="huis" id="Huisnummer" required>

              <label for="Postcode"><b>Postcode</b></label>
              <input type="text" placeholder="zoals 1234AB" name="postcode" id="Postcode" maxlength="6" required>

              <label for="Stad"><b>Stad</b></label>
              <input type="text" placeholder="Voer uw stad in" name="stad" id="Stad" required>

              <label for="psw"><b>Wachtwoord</b></label>
              <input type="password" placeholder="Voer Wachtwoord in" name="psw" id="psw" required>

              <hr>
              <p>Door een account aan te maken ga je akkoord met onze <a href="#">Algemene voorwaarden en Privacybeleid</a>.</p>

              <button type="submit" class="registerbtn">Registreer</button>
          </div>

          <div class="container signin">
              <p>Heb je al een account? <a href="html/Login.html">Log hier in!</a>.</p>
          </div>
      </form>
