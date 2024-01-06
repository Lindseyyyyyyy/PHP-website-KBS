<?php
// Verbinding maken met de database (vervang deze gegevens door je eigen databasegegevens)
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nerdy_gadgets";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controleren op databaseverbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Filteropties ontvangen via POST
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    // Veronderstel dat je filteropties in een formulier met de namen 'productsoort' en 'prijsklasse' hebt
    // (en mogelijk ook 'sorteren_op')
    $productsoort = isset($_POST['productsoort']) ? $_POST['productsoort'] : [];
    $prijsklasse = isset($_POST['prijsklasse']) ? $_POST['prijsklasse'] : [];
    $sorteren_op = isset($_POST['sorteren_op']) ? $_POST['sorteren_op'] : 'nieuw'; // standaardwaarde is 'nieuw'

    // Veronderstel dat je ook de klant-ID hebt opgeslagen in een sessie (je moet dit aanpassen op basis van je authenticatiesysteem)
    session_start();
    $customer_id = $_SESSION['user_id'];

    // Converteer de arrays naar JSON-strings om ze in de database op te slaan
    $productsoort_json = json_encode($productsoort);
    $prijsklasse_json = json_encode($prijsklasse);

    // SQL-query om filteropties in de database in te voegen
    $insert_query = "INSERT INTO search_history (id, user_id, search_term, timestamp)
                     VALUES ('$customer_id', '$productsoort_json', '$prijsklasse_json', '$sorteren_op')";

    // Query uitvoeren
    if ($conn->query($insert_query) === TRUE) {
        // Controlepunt: Filteropties zijn succesvol opgeslagen in de database.
        echo "Filteropties zijn succesvol opgeslagen in de database.";
    } else {
        // Controlepunt: Fout bij het opslaan van filteropties
        echo "Fout bij het opslaan van filteropties: " . $conn->error;
    }
}

// Databaseverbinding sluiten
$conn->close();
?>