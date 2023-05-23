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
                <h2>Dovolenka leto 2023</h2>
                <a href="./php-pages/first-minute.php"><button>prezerať ponuku</button></a>
            </div>
        </section>

        <section class="services">
            <div class="container text-center">
                <h2>naše služby</h2>
                <h3>Vám pomôžu pri cestovaní</h3>
                <div class="row">
                    <div class="col">
                        <img src="img/home-img/letenky.jpg" class="img-fluid" alt="...">
                        <h4>Letenky</h4>
                    </div>
                    <div class="col">
                        <img src="img/home-img/hotel.jpg" class="img-fluid" alt="...">
                        <h4>Hotel</h4>
                    </div>
                    <div class="col">
                        <img src="img/home-img/sprievodca.jpg" class="img-fluid" alt="...">
                        <h4>Sprievodca</h4>
                    </div>
                </div>
                <a href="./php-pages/another-services.php"><button>viac info</button></a>
            </div>
        </section>

        <section class="chinese-wall">
            <div class="container title-field">
                <p class="destinations-title">destinácie</p>
                <h2>Veľký čínsky múr</h2>
                <p>Je starý systém opevnenia, ktorý sa ťahá naprieč severnou Čínou. Jeho účelom bolo chrániť Čínu pred
                    mongolskými vpádmi.
                    Múr sa tiahne v dĺžke 8 850 km. V niektorých úsekoch prebieha v niekoľkých líniách a vytvára
                    odbočky, na iných miestach je naopak prerušený.</p>
                <a href="./php-pages/destinations.php"><button>zistiť viac</button></a>
            </div>
        </section>

        <section class="tools">
            <div class="container">
                <h4>inteligentné nástroje</h4>
                <h2>Uľahčite si vaše hľadanie</h2>
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
                <h4>recenzie</h4>
                <h2>Spokojní zákazníci</h2>
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