
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

 print ( "dit is die info". $email.$ww);}

$regis = "INSERT INTO user (email,password)
VALUES($email,$ww)";

if ($conn->query($regis) === TRUE) {
    print("account aangemaakt voor".$email);
}
;
?>
<form method="post" action="logintest.php">
  <div class="container1">
    <h1>Registreer</h1>
    <p>Vul dit formulier in om een account aan te maken. Welkom </p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Vul E-mail in" name="email" id="email" required>

    <label for="psw"><b>Wachtwoord</b></label>
    <input type="password" placeholder="Voer Wachtwoord in" name="psw" id="psw" required>

    <label for="naam"><b>voornaam</b></label>
    <input type="text" placeholder="voornaam" name="name" id="name" required>

      <label for="naam"><b>tussenvoegsel</b></label>
      <input type="text" placeholder="tussenvoegsel" name="tussen" id="tussen">

      <label for="naam"><b>voornaam</b></label>
      <input type="text" placeholder="achternaam" name="lastname" id="lastname" required>
    <hr>
    <p>Door een account aan te maken ga je akkoord met onze <a href="#">Algemene voorwaarden en Privacybeleid</a>.</p>

    <button type="submit" class="registerbtn">Registreer</button>


        </div>
  <script src="../java/registratie.js"></script>

  <div class="container signin">
    <p>Heb je al een account? <a href="Login.html">Log hier in!</a>.</p>
  </div>