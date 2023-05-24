<?php
$pageName = "Destinácie";
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
        <section class="fav-destinations">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="mt-5 mb-5">Obľúbené destinácie</h6>
                    </div>
                    <div class="col">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="4000">
                                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/barcelona_orig.jpg" class="d-block w-100" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="4000">
                                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/oman_orig.jpg" class="d-block w-100" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="4000">
                                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/sicilia_orig.jpg" class="d-block w-100" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="4000">
                                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/mexiko_orig.jpg" class="d-block w-100" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="4000">
                                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/dubaj_orig.jpg" class="d-block w-100" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="4000">
                                    <img src="https://lsklenar.weebly.com/uploads/1/4/3/7/143782816/alpy_orig.jpg" class="d-block w-100" class="img-fluid" alt="...">
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
                    </div>
                </div>
            </div>
        </section>

        <section class="places">
            <div class="container text-center">
                <div class="row align-items-center spacer">
                    <div class="col txt-col">
                        <h1>Omán</h1>
                        <h4>Fanar hotel</h4>
                        <p>Orientálna krajina s tyrkysovým morom a bielymi plážami je snom každého dovolenkára.</p>
                        <button>omán</button>
                    </div>
                    <div class="col">
                        <img src="../img/destinations-img/oman-hotel.jpg" class="img-fluid" alt="...">
                    </div>
                </div>

                <div class="row align-items-center spacer">
                    <div class="col">
                        <img src="../img/destinations-img/barcelona-hotel.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col txt-col">
                        <h1>Barcelona</h1>
                        <h4>Hotel Jazz</h4>
                        <p>Prímorské mesto s množstvom kultúrnych pamiatok je veľmi vyhľadávanou destináciou.</p>
                        <button>barcelona</button>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col txt-col">
                        <h1>Čína</h1>
                        <h4>Čínsky múr</h4>
                        <p>Starý systém opevnenia tiahnuci naprieč severnou Čínou ohúri každého nadšenca turistiky.</p>
                        <button>čína</button>
                    </div>
                    <div class="col">
                        <img src="../img/destinations-img/oman-hotel.jpg" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <?php include '../inc/footer.php'; ?>