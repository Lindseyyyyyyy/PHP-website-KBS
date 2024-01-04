<?php
if (isset($_GET['search_term'])) {
    $searchTerm = $_GET['search_term'];
    $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0; // Zorg ervoor dat je een gebruikerssessie hebt ingesteld

    // Voeg de zoekterm toe aan de database
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "Lovinadolfijn123!@";
    $dbName = "nerdy_gadgets";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    if (!$conn) {
        die("Verbinding mislukt: " . mysqli_connect_error());
    }

    $query = "INSERT INTO search_history (user_id, search_term) VALUES ('$userId', '$searchTerm')";

    if (mysqli_query($conn, $query)) {
        echo "Zoekterm succesvol toegevoegd aan de database.";
    } else {
        echo "Fout bij het toevoegen van zoekterm: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}