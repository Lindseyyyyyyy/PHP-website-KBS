<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    // Hier kun je de gegevens opslaan in een database, een tekstbestand, of een ander opslagmechanisme.

    // Voorbeeld: opslaan in een tekstbestand
    $data = "$name - $rating Sterren\n$review\n\n";
    file_put_contents("reviews.txt", $data, FILE_APPEND);

    // Je zou hier ook een databaseverbinding kunnen maken en de gegevens in een database kunnen opslaan.
    // Zorg ervoor dat je de juiste databaseconfiguratie en beveiligingsmaatregelen implementeert voor een productie-omgeving.
}

