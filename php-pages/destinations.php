<?php
include '../inc/header.php';
$pageName = "Domov";
?>

<body>
    <div class="full-container">
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

        <section class="fav-destinations">
            <h1>Obľúbené destinácie</h1>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/barcelona_orig.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/oman_orig.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/sicilia_orig.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/mexiko_orig.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/dubaj_orig.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/alpy_orig.jpg" class="d-block w-100" alt="...">
                    </div>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="places">

            <div>
                <h1>Omán</h1>
                <h2>Fanar hotel</h2>
                <p>Orientálna krajina s tyrkysovým morom a bielymi plážami je snom každého dovolenkára.</p>
                <button>omán</button>
            </div>
            <div>
                <img src="../img/destinations-img/oman-hotel.jpg" alt="">
            </div>


            <div>
                <h1>Barcelona</h1>
                <h2>Hotel Jazz</h2>
                <p>Prímorské mesto s množstvom kultúrnych pamiatok je veľmi vyhľadávanou destináciou.</p>
                <button>barcelona</button>
            </div>
            <div>
                <img src="../img/destinations-img/barcelona-hotel.jpg" alt="">
            </div>

            <div>
                <h1>Čína</h1>
                <h2>Čínsky múr</h2>
                <p>Starý systém opevnenia tiahnuci naprieč severnou Čínou ohúri každého nadšenca turistiky.</p>
                <button>čína</button>
            </div>
            <div>
                <img src="../img/destinations-img/china.jpg" alt="">
            </div>
        </section>
        <!-- <section class="main-page">
            <div class="banner-main-page">
                <h2>Dovolenka leto 2023</h2>
                <button>prezerať ponuku</button>
            </div>
        </section>

        <section class="services">
            <div class="banner-services">
                <h2>naše služby</h2>
                <h3>Vám pomôžu pri cestovaní</h3>
            </div>

            <div class="services-list">
                <div class="col">
                    <img src="img/home-img/letenky.jpg" alt="">
                    <h2>Letenky</h2>
                </div>
                <div class="col">
                    <img src="img/home-img/hotel.jpg" alt="">
                    <h2>Hotel</h2>
                </div>
                <div class="col">
                    <img src="img/home-img/sprievodca.jpg" alt="">
                    <h2>Sprievodca</h2>
                </div>
            </div>
            <button>viac info</button>
        </section>
        <section class="chinese-wall">
            <div class="title-field">
                <p class="destinations-title">destinácie</p>
                <h2>Veľký čínsky múr</h2>
                <p>Je starý systém opevnenia, ktorý sa ťahá naprieč severnou Čínou. Jeho účelom bolo chrániť Čínu pred mongolskými vpádmi.
                    Múr sa tiahne v dĺžke 8 850 km. V niektorých úsekoch prebieha v niekoľkých líniách a vytvára odbočky, na iných miestach je naopak prerušený.</p>
                <button>zistiť viac</button>
            </div>
        </section>
        <section class="tools">
            <h4>inteligentné nástroje</h4>
            <h2>Uľahčite si vaše hľadanie</h2>
            <h6>Pre viac informácií kliknite na jednotlivé ikony</h6>
            <div class="tools-list">
                <div class="col">
                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/bell_1.jpg" alt="">
                    <h5>Cenové upozornenie</h5>
                    <p>Zapnite si cenové upozornenie a nenechajte si ujsť prijateľnú cenu vašej dovolenky.</p>
                </div>
                <div class="col">
                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/doc_1.jpg" alt="">
                    <h5>Rýchle dokumenty</h5>
                    <p>Stiahnite si potrebné dokumenty na cestovanie rýchlo a jednoducho bez potreby vypisovania údajov.</p>
                </div>
                <div class="col">
                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/plane_1.jpg" alt="">
                    <h5>Poistenie</h5>
                    <p>Prezrite si ceny všetkých dostupných cestovných poistení na jednom mieste a ušetrite svoj čas.</p>
                </div>
            </div>
        </section>

        <section class="reviews">
            <h4>recenzie</h4>
            <h2>Spokojní zákazníci</h2>
            <div>
                <blockquote>"</blockquote>
                <h6>Boli sme veľmi spokojní s pomerom ceny a kvality, hotel bol čistý a služby fungovali tak, ako mali. Veľmi sa nám páčil letiskový transfer, vodič prišiel načas. Určite túto CK odporúčam!</h6>
                
            </div>
            <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/stars_1.png" alt="">
            <p>Ivana Bieliková</p>
        </section> -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>