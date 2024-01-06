<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $eersteantwoord = $_POST['vraag1'];
    $tweedeantwoord = "b";
    $derdeantwoord = "c";
    if ($eersteantwoord = "a" && $tweedeantwoord = "b" && $derdeantwoord = "c") {
        print ("goed gedaan");
    } else {
        print ("niet goed");
    }
}