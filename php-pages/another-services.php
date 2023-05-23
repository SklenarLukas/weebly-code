<?php
$pageName = "Ďalšie služby";
include '../inc/header.php';
?>

<body>
    <header>
        <nav class="container">
            <ul>
                <div class="logo">
                    <img src="../img/logo.png" alt="">
                </div>
                <li><a href="../index.php">Domov</a></li>
                <li><a href="../php-pages/destinations.php">Destinácie</a></li>
                <li><a href="../php-pages/first-minute.php">First Minute</a></li>
                <li><a href="../php-pages/another-services.php">Ďalšie služby</a></li>
                <li><a href="../php-pages/contact.php">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-wrap">
        <section class="our-services">
            <div class="container text-center">
                <h2>naše služby</h2>
                <h1 class="mt-5 mb-5">Ktoré vám značne uľahčia cestovanie</h1>

                <div class="row align-items-start">
                    <div class="col">
                        <img src="../img/another-services-img/flight-tickets.jpg" class="img-fluid" alt="...">
                        <h3>Letenky</h3>
                        <p>Nemusíte hľadať a kupovať letenky, vyriešime to za vás.</p>
                    </div>
                    <div class="col">
                        <img src="../img/another-services-img/hotel.jpg" class="img-fluid" alt="...">
                        <h3>Hotel</h3>
                        <p>Objednáme vám hotel.</p>
                    </div>
                    <div class="col">
                        <img src="../img/another-services-img/guide.jpg" class="img-fluid" alt="...">
                        <h3>Sprievodca</h3>
                        <p>Môžete využiť služby súkromného sprievodcu.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="call-us">
            <div class="container">
                <h1>Bezplatná linka k naším službám</h1>
                <p>Ak chcete využiť naše doplnkové služby, neváhajte nás kontaktovať na tel. čísle a my vám radi pomôžeme pripraviť vašu dovolenku do posledných detailov!</p>
                <button>+421 905 245 845</button>
            </div>
            <?php include '../inc/footer.php'; ?>