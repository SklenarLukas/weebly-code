<?php
$pageName = "Domov";
include './inc/header.php';
?>

<body>
    <header>
        <nav class="container">
            <ul>
                <div class=" logo">
                    <img src="./img/logo.png" alt="">
                </div>
                <li><a href="./index.php">Domov</a></li>
                <li><a href="./php-pages/destinations.php">Destinácie</a></li>
                <li><a href="./php-pages/first-minute.php">First Minute</a></li>
                <li><a href="./php-pages/another-services.php">Ďalšie služby</a></li>
                <li><a href="./php-pages/contact.php">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <div class="main-wrap">
        <section class="main-page">
            <div class="banner-main-page container">
                <h6>Dovolenka leto 2023</h6>
                <a href="./php-pages/first-minute.php"><button>prezerať ponuku</button></a>
            </div>
        </section>

        <section class="services">
            <div class="container text-center">
                <h2>naše služby</h2>
                <h4>Vám pomôžu pri cestovaní</h4>
                <div class="row">
                    <div class="col">
                        <img src="img/home-img/letenky.jpg" class="img-fluid" alt="...">
                        <h5>Letenky</h5>
                    </div>
                    <div class="col">
                        <img src="img/home-img/hotel.jpg" class="img-fluid" alt="...">
                        <h5>Hotel</h5>
                    </div>
                    <div class="col">
                        <img src="img/home-img/sprievodca.jpg" class="img-fluid" alt="...">
                        <h5>Sprievodca</h5>
                    </div>
                </div>
                <a href="./php-pages/another-services.php"><button>viac info</button></a>
            </div>
        </section>

        <section class="chinese-wall">
            <div class="container title-field">
                <h2 class="destinations-title">destinácie</h2>
                <h3>Veľký čínsky múr</h3>
                <p>Je starý systém opevnenia, ktorý sa ťahá naprieč severnou Čínou. Jeho účelom bolo chrániť Čínu pred
                    mongolskými vpádmi.
                    Múr sa tiahne v dĺžke 8 850 km. V niektorých úsekoch prebieha v niekoľkých líniách a vytvára
                    odbočky, na iných miestach je naopak prerušený.</p>
                <a href="./php-pages/destinations.php"><button>zistiť viac</button></a>
            </div>
        </section>

        <section class="tools">
            <div class="container">
                <h2>inteligentné nástroje</h2>
                <h3>Uľahčite si vaše hľadanie</h3>
                <h6>Pre viac informácií kliknite na jednotlivé ikony</h6>
                <div class="row">
                    <div class="col">
                        <a href="./php-pages/another-services.php"><img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/bell_1.jpg" class="img-fluid" alt="..."></a>
                        <h5>Cenové upozornenie</h5>
                        <p>Zapnite si cenové upozornenie a nenechajte si ujsť prijateľnú cenu vašej dovolenky.</p>
                    </div>
                    <div class="col">
                        <a href="./php-pages/another-services.php"><img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/doc_1.jpg" class="img-fluid" alt="..."></a>
                        <h5>Rýchle dokumenty</h5>
                        <p>Stiahnite si potrebné dokumenty na cestovanie rýchlo a jednoducho bez potreby vypisovania
                            údajov.</p>
                    </div>
                    <div class="col">
                        <a href="./php-pages/another-services.php"><img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/plane_1.jpg" class="img-fluid" alt="..."></a>
                        <h5>Poistenie</h5>
                        <p>Prezrite si ceny všetkých dostupných cestovných poistení na jednom mieste a ušetrite svoj
                            čas.</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="reviews">
            <div class="container">
                <h2>recenzie</h2>
                <h3>Spokojní zákazníci</h3>
                <div class="reviews-text">
                    <blockquote><img src="https://lsklenar.weebly.com/files/theme/images/quote.png?1669716181" class="img-fluid" alt=""></blockquote>
                    <h6>Boli sme veľmi spokojní s pomerom ceny a kvality, hotel bol čistý a služby fungovali tak, ako
                        mali. Veľmi sa nám páčil letiskový transfer, vodič prišiel načas. Určite túto CK odporúčam!</h6>
                </div>
                <div class="stars">
                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/stars_1.png" class="img-fluid" alt="...">
                    <p>Ivana Bieliková</p>
                </div>
            </div>
            <?php include './inc/footer.php'; ?>