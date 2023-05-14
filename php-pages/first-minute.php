<?php
include '../inc/header.php';
$pageName = "Domov";
?>

<body>
    <nav>
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

    <div class="main-wrap">


        <section class="china-title">
            <h1>Čína</h1>
        </section>

        <section class="img-text">
            <div class="container">
                <div class="culture">
                    <img src="../img/first-minute-img/statue.jpg" class="img-fluid" alt="...">
                    <div>
                        <h2>Kultúrne pamiatky</h2><br><br>
                        <p>Socha Sun-c', vlastným menom Wu Sun-a. Bol autorom diela Umenie vojny, veľmi vplyvnej čínskej knihy o vojenskej stratégii. Bol jeden z prvých realistov v teórii medzinárodných vzťahov.</p>
                    </div>
                </div>

                <div class="culture">
                    <img src="../img/first-minute-img/meal.jpg" class="img-fluid" alt="...">
                    <div>
                        <h2>Jedlo</h2><br><br>
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
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>