<?php
$pageName = "First Minute";
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
        <section class="china-title">
            <h1>Čína</h1>
        </section>

        <section class="img-text">
            <div class="container">
                <div class="culture">
                    <img src="../img/first-minute-img/statue.jpg" class="img-fluid" alt="...">
                    <div>
                        <h3>Kultúrne pamiatky</h3><br><br>
                        <p>Socha Sun-c', vlastným menom Wu Sun-a. Bol autorom diela Umenie vojny, veľmi vplyvnej čínskej knihy o vojenskej stratégii. Bol jeden z prvých realistov v teórii medzinárodných vzťahov.</p>
                    </div>
                </div>

                <div class="culture">
                    <img src="../img/first-minute-img/meal.jpg" class="img-fluid" alt="...">
                    <div>
                        <h3>Jedlo</h3><br><br>
                        <p>Čína ponúka množstvo tradičných pestrých jedál. Rezance, ryža, zelenina, sója, huby, kuracie mäso, kačacie mäso, hovädzie mäso, morské plody a ryby tvoria základ v množstve čínskych jedál. K základným surovinám sa pridávajú u nás menej tradičné bambusové výhonky, riasy a klíčky.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="summer-destinations">
            <div class="container text-center">
                <h2 class="mt-3">ďalšie obľúbené destinácie</h2>
                <h1 class="mt-5 mb-5">Letné destinácie</h1>

                <div class="row align-items-start">
                    <div class="col">
                        <img src="../img/first-minute-img/italy.jpg" class="img-fluid" alt="...">
                        <p>Taliansko</p>
                    </div>
                    <div class="col">
                        <img src="../img/first-minute-img/africa.jpg" class="img-fluid" alt="...">
                        <p>Afrika</p>
                    </div>
                    <div class="col">
                        <img src="../img/first-minute-img/mexico.jpg" class="img-fluid" alt="...">
                        <p>Mexiko</p>
                    </div>
                </div>
            </div>
            <?php include '../inc/footer.php'; ?>