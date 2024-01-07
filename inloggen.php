<?php
// login.php


include_once 'databaseconnectie.php';
global $conn;

if ($conn->connect_error) {

}
die("Connection failed: " . $conn->connect_error);



session_start();

// Controleer of REQUEST_METHOD is gedefinieerd en gelijk is aan 'POST'
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = isset($_POST['email']) ? $_POST['email'] : "";
    $password = isset($_POST['psw']) ? $_POST['psw'] : "";

    // Voer hier de databaseverbinding in
    include('db_connection.php');

    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Controleer het wachtwoord
        if (password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: dashboard.php'); // Stuur door naar de beveiligde pagina
            exit();
        } else {
            $login_error = "Ongeldig wachtwoord.";
        }
    } else {
        $login_error = "Gebruiker niet gevonden.";
    }

    mysqli_close($conn);
}
?>
