function submitForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Hier zou je normaal gesproken een AJAX-verzoek naar de server sturen
    // om de inloggegevens te verifiëren en een sessie op te zetten.
    // In een echte toepassing zou je dit op de serverzijde implementeren.

    // Voor nu geven we gewoon een melding weer.
    alert('Inloggegevens: ' + username + ' / ' + password);
}
