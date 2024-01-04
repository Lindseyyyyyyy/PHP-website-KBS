
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Nerdy Gadgets</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/products.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="home.html">Nerdy Gadgets</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.html"> Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../kanhetweg/producten.html"> Producten <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html"> Contact </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shoppingcart.html"> Winkelwagen</a>
            </li>
        </ul>
    </div>
</nav>


<section class="container my-5">

    <h5 class="card-title"> easter egg titel </h5> <br>

    <div>
        <div class="card" >
            <img src="../img/rozegift.webp" alt="Easter Egg Image" id="easterEggImage">
    <style>
        #easterEggMessage {
            display: none;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        #copyButton {
            padding: 10px 20px;
            background-color: #230536;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
            <div id="easterEggMessage">
                <p>Wow een cadeautje! gebruik de volgende kortingscode voor 17% korting op je gehele bestelling: <strong id="easterEggCode">EASTEREGG17</strong></p>
                <button id="copyButton">kopieer Code</button>
            </div>
            <script>
                document.getElementById('easterEggImage').addEventListener('click', function() {
                    // Show the message
                    document.getElementById('easterEggMessage').style.display = 'block';
                });

                document.getElementById('copyButton').addEventListener('click', function() {
                    // Copy the code to the clipboard
                    var easterEggCode = document.getElementById('easterEggCode');
                    var textArea = document.createElement('textarea');
                    textArea.value = easterEggCode.innerText;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textArea);

                    // Inform the user that the code is copied
                    alert('Code copied to clipboard!');
                });
            </script>
            </div>
    </div>

</section>

</body>

<footer class="footer">
    <div class="container">
        <p>&copy; 2023 Nerdy Gadgets</p>
    </div>
</footer>

<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>

