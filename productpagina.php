<html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>The Nerdy Gadgets</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/products.css">
</head>
<body>

  <!-- Navbar -->
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
          <a class="nav-link" href="producten.html"> Producten <span class="sr-only">(current)</span></a>
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

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
          <div style="background-color: #230536; color: #fff; padding: 20px; text-align: center;">
          <h1 class="display-4">The Gadgets</h1>
          <p class="lead">Explore our amazing gadgets.</p>
            <!-- productfilters -->
            <form>
              categorie: <input type="checkbox" name="productsoort" value= "laptops" > laptops
              <input type="checkbox" name="productsoort" value="phones"> phones
                <input type="checkbox" name="productsoort" value="opslag"> opslag
                <input type="checkbox" name="productsoort" value="routers"> routers
                <input type="checkbox" name="productsoort" value="componenten"> componenten
                <input type="checkbox" name="productsoort" value="desktops"> desktops
                <br>
                producten sorteren op:
                    <select name="sorteren op" id="sorteren">
                    <option value="nieuw">nieuwste eerst</option>
                    <option value="laagsteprijs">prijs van laag naar hoog</option>
                    <option value="hoogsteprijs">prijs van hoog naar laag</option>
                    <option value="niet"> onze selectie </option>
                </select>
                <br>
                <input type="submit" name="submit" value="Keuze bevestigen">
                <br>
                <input type="reset" value="filters resetten">
            </form>
        </div>
      </div>

  <!-- Product Grid -->
    <section class="container my-5">
        <div class="row mb-4">
            <div class="col-lg-4">
              <div class="card">
                <img src="https://rseatstore.nl/wp-content/uploads/2023/02/rseat-rs1-red-black-01-1200x1200-2.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">RSeat RS1 - Zwart Frame / Rode Stoel: Premium Simulatie Race-ervaring</h5>
                  <p class="card-text">De RSeat RS1 met een zwart frame en een rode stoel biedt de ultieme race- en
                    vliegsimulatie-ervaring voor serieuze enthousiastelingen en professionals. </p>
                  <span class="product-price"> <strong>€1500,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="https://hwimages.beslist.net/beslist-images/3NKhCQtZk8eRanazLjQXEFXAgxYg/394/F600/84ea216e31bd107ab93646aead906b8c/Computerspeakers/Edifier-R1100-pc-luidspreker.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Edifier R1280DB - Zwart: Geluid dat Impact Maakt</h5>
                  <p class="card-text">De Edifier R1280DB in stijlvol zwart is een hoogwaardige boekenplankluidspreker die een
                    rijk, helder geluid levert en een geweldige aanvulling vormt op elke luisteromgeving.</p>
                  <span class="product-price"> <strong>€130,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="https://image.coolblue.nl/max/500x500/products/1448708" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Samsung 870 QVO 4TB: Grote Capaciteit, Uitzonderlijke Prestaties</h5>
                  <p class="card-text">De Samsung 870 QVO 4TB is een high-capacity solid-state drive (SSD) die prestaties,
                    betrouwbaarheid en enorme opslagcapaciteit biedt. Upgrade je opslag met deze indrukwekkende SSD.</p>
                  <span class="product-price"> <strong>€65,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-lg-4">
              <div class="card">
                <img src="https://media.s-bol.com/3vYvkEEqM9Vx/ZMPnYE/550x466.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Legion Laptop: Voor de Echte Gamer</h5>
                  <p class="card-text">De Legion laptop is de ultieme keuze voor serieuze gamers.</p>
                  <span class="product-price"> <strong>€1050,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="https://img.office-deals.nl/w/Office_deals_A_series_Usb_Stick_Usb_2_0_16_Gb(10264743).jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">A Series USB Flashdrive 32GB: Snel en Betrouwbaar Gegevensgeheugen</h5>
                  <p class="card-text">Onze A Series USB flashdrive, met een royale capaciteit van 32GB, biedt de ideale oplossing
                    voor al je gegevensopslagbehoeften.</p>
                  <span class="product-price"> <strong>€12,50</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="https://assets.mmsrg.com/isr/166325/c1/-/pixelboxx-mss-81135169/fee_786_587_png" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Logitech G502 Lightspeed Wireless: Krachtige Precisie in Draadloze Vrijheid</h5>
                  <p class="card-text">De Logitech G502 Lightspeed Wireless gamingmuis tilt je gamingervaring naar een hoger
                    niveau. De Logitech G502 Lightspeed Wireless is ontworpen voor serieuze gamers die
                    topprestaties en aanpasbaarheid eisen.</p>
                  <span class="product-price"> <strong>€220,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-lg-4">
              <div class="card">
                <img src="https://media.s-bol.com/Z4ZEA0Nk1D7g/550x550.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">TP-Link Archer TXE75E Tri-Band Wi-Fi 6E Bluetooth PCI Express Adapter:
                    Supersnelle Draadloze Connectiviteit</h5>
                  <p class="card-text">De TP-Link Archer TXE75E is een krachtige PCI Express-adapter die je desktopcomputer
                    voorziet van razendsnelle draadloze connectiviteit. </p>
                  <span class="product-price"> <strong>€89,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDQXyxX3BIEKb8wfOw9w0LunyqpiRNCo0FSTpyj1uy3dgpXj40uyaA4hTT9FAiZgtTqdk&usqp=CAU" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">TP-Link Archer AXE75 Tri-Band Wi-Fi 6E Router: De Toekomst van Draadloos
                    Internet</h5>
                  <p class="card-text">De TP-Link Archer AXE75 Wi-Fi 6E-router is ontworpen om jouw draadloze
                    netwerkervaring naar een nieuw niveau te tillen. Dit is de perfecte keuze voor gezinnen en
                    thuiskantoren die hoge prestaties en een betrouwbaar netwerk eisen. </p>
                  <span class="product-price"> <strong>€190,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="https://tweakers.net/i/X47YR8VfP7t2w-iEQVBUE2Lrbvo=/i/2004794872.jpeg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Lenovo Legion T7 34IMZ5 - 90Q900ALMH: Krachtig Gamingbeest</h5>
                  <p class="card-text">De Lenovo Legion T7 34IMZ5 is een gamingdesktop die krachtige prestaties en een
                    opvallend ontwerp combineert om gamers een ongeëvenaarde ervaring te bieden.</p>
                  <span class="product-price"> <strong>€3300,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="https://image.coolblue.nl/422x390/products/1742068" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">MacBook Air: Elegantie en Kracht in Ultrabook-Formaat</h5>
                  <p class="card-text">De MacBook Air is de belichaming van sublieme stijl en prestaties in een ultradunne
                    vormfactor. De MacBook Air combineert verfijning met prestaties en is ideaal voor creatieve
                    professionals, studenten en iedereen die een uitstekende draagbare computer zoekt.</p>
                  <span class="product-price"> <strong>€950,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="https://simracingstore.nl/wp-content/uploads/2021/02/4-TS-XWRacerSparcoP310-PR4.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Thrustmaster TS-XW Racer Sparco P310 Competition Mod: Race met Unieke Precisie</h5>
                  <p class="card-text">De Thrustmaster TS-XW Racer Sparco P310 Competition Mod is een hoogwaardig
                    racestuur voor zowel Xbox als pc-gaming, ontworpen om de meest veeleisende racers
                    tevreden te stellen.</p>
                  <span class="product-price"> <strong>€300,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="https://cdn.sicomputers.nl/media/catalog/product/cache/bca394cfb76fb222b4a59471227dc76e/8/7/87189838fd6e49669724fbce90330077d23d4f.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">LG 40WP95CP-W - 39.7'' Gebogen UltraWide 5K2K Nano IPS Scherm: Een Venster
                    naar de Toekomst van Beeldkwaliteit</h5>
                  <p class="card-text">Het LG 40WP95CP-W UltraWide-scherm met een gigantisch 5K2K Nano IPS-paneel en een
                    elegante kromming biedt een ongeëvenaarde visuele ervaring. Duik
                    in de toekomst van visuele prestaties met dit indrukwekkende UltraWide-scherm. </p>
                  <span class="product-price"> <strong>€1300,-</strong> </span>
                  <a href="shoppingcart.html" class="btn btn-primary float-right">Buy Now</a>
                </div>
              </div>
            </div>
          </div>
    </div>
    </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2023 Nerdy Gadgets</p>
    </div>
  </footer>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 </body>
</html>
