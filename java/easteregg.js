document.getElementById('logo').addEventListener('click', function() {
    document.getElementById('hiddenContent').style.display = 'block';

    // Verbergt de inhoud na 5 seconden
    setTimeout(function() {
        document.getElementById('hiddenContent').style.display = 'none';
    }, 5000); // 5000 milliseconden = 5 seconden
});
