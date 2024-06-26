<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fanfarenzug Rottweil 1978 e.V.</title>
    <link rel="icon" href="images/favicon.ico" type="image/vnd.microsoft.icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/sm-core-css.css" rel="stylesheet">
    <link href="css/sm-simple.css" rel="stylesheet">
    <link href="css/smartmenu.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link href="css/styles.css" rel="stylesheet">
</head>

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': "Bild %1 von %2",
        'showImageNumberLabel': false
    })
</script>

<body>
    <div class="container">
        <wrapper class="d-flex flex-column">
            <div class="pageheader">
                <div class="row d-print-none">
                    <div class="col-sm-12">
                        <!-- Topmenü mit Kontakt, Impressum, Sitemap -->
                        <div class="topmenu text-md-end">
                            <span><a><a href="index.php?page=topmenu/kontakt" title="Kontakt">Kontakt</a></a></span>
                            <!-- <span><a><a href="index.php?page=topmenu/sitemap" title="Sitemap">Sitemap</a></a></span> -->
                            <span><a><a href="index.php?page=topmenu/datenschutz" title="Datenschutz">Datenschutz</a></a></span>
                            <span><a><a href="index.php?page=topmenu/impressum" title="Impressum">Impressum</a></a></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <a href="https://www.fanfarenzug-rottweil.de" title=""><img src="images/header.jpg" class="img-fluid" alt="Logo"></a>
                    </div>
                </div>
            </div> <!-- Ende des Kopfteils -->

            <!-- Hauptnavigation -->
            <nav class="main-nav d-print-none" role="navigation">
                <input id="main-menu-state" type="checkbox" />
                <label class="main-menu-btn" for="main-menu-state">
                    <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                </label>

                <ul id="main-menu" class="sm sm-simple">
                    <li><a href="index.php?page=home" title="Start">Start</a></li>

                    <!-- Über uns -->
                    <li><a href="index.php?page=ueber_uns/vorstand" title="Über uns">Über uns</a>
                        <ul>
                            <li><a href="index.php?page=ueber_uns/vorstand" title="Vorstand">Vorstand</a></li>
                            <li><a href="index.php?page=ueber_uns/ausschuss" title="Ausschuss">Ausschuss</a></li>
                            <li><a href="index.php?page=ueber_uns/instrumente" title="Instrumente">Instrumente</a></li>
                            <li><a href="index.php?page=ueber_uns/fahnenschwinger" title="Fahnenschwinger">Fahnenschwinger</a></li>
                            <li><a href="index.php?page=ueber_uns/satzung" title="Satzung">Satzung</a></li>
                        </ul>
                    </li>

                    <!-- Geschichtliches -->
                    <li><a href="index.php?page=chronik/chronik" title="Geschichtliches">Geschichtliches</a>
                        <ul>
                            <li><a href="index.php?page=chronik/chronik" title="Chronik ">Chronik</a></li>
                            <li><a href="index.php?page=chronik/fanfaren" title="Fanfaren ">Fanfaren</a></li>
                        </ul>
                    </li>

                    <!-- Fahnenschwingen-->
                    <li><a href="index.php?page=fahnenschwingen/heute" title="Fahnenschwingen">Fahnenschwingen</a>
                        <ul>
                            <li><a href="index.php?page=fahnenschwingen/heute" title="Fahnenschwingen heute">Heute</a></li>
                            <li><a href="index.php?page=fahnenschwingen/geschichte" title="Fahnenschwingen Geschichte">Geschichte</a></li>
                            <li><a href="index.php?page=fahnenschwingen/plazierungen" title="Fahnenschwingen Plazierungen">Plazierungen</a></li>
                        </ul>
                    </li>

                    <!-- Termine -->
                    <li><a href="index.php?page=termine" title="Termine">Termine</a></li>

                    <!-- Bilder -->
                    <li><a href="index.php?page=gallery&year=2021" title="Bilder">Bilder</a>
                        <ul>
                            <li><a href="index.php?page=gallery&year=2021" title="Das Jahr 2021">2021</a></li>
                            <li><a href="index.php?page=gallery&year=2020" title="Das Jahr 2020">2020</a></li>
                            <li><a href="index.php?page=gallery&year=2019" title="Das Jahr 2019">2019</a></li>
                            <li><a href="index.php?page=gallery&year=2018" title="Das Jahr 2018">2018</a></li>
                            <li><a href="index.php?page=gallery&year=2017" title="Das Jahr 2017">2017</a></li>
                            <li><a href="index.php?page=gallery&year=2016" title="Das Jahr 2016">2016</a></li>
                            <li><a href="index.php?page=gallery&year=2015" title="Das Jahr 2015">2015</a></li>
                            <li><a href="index.php?page=gallery&year=2014" title="Das Jahr 2014">2014</a></li>
                            <li><a href="index.php?page=gallery&year=2013" title="Das Jahr 2013">2013</a></li>
                            <li><a href="index.php?page=gallery&year=2012" title="Das Jahr 2012">2012</a></li>
                            <li><a href="index.php?page=gallery&year=2011" title="Das Jahr 2011">2011</a></li>
                            <li><a href="index.php?page=gallery&year=2010" title="Das Jahr 2010">2010</a></li>
                        </ul>
                    </li>

                    <!-- Presse -->
                    <li><a href="index.php?page=presse" title="Presse">Presse</a></li>

                    <!-- Links- -->
                    <li><a href="index.php?page=links" title="Links">Links</a></li>
                </ul>
            </nav> <!-- Ende der Hauptnavigation -->

            <!-- Inhalt -->
            <div class="maincontent flex-fill">
                <?php
                // Überprüfen, ob eine Seite ausgewählt wurde
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];

                    // Überprüfen, ob die ausgewählte Seite existiert
                    if (file_exists("pages/$page.php")) {
                        include("pages/$page.php");
                    } else {
                        include("pages/404.php");
                    }
                } else {
                    include("pages/home.php");
                }
                ?>
            </div> <!-- Ende des Inhalts -->

            <!-- Footer -->
            <div class="container-fluid pagefooter text-center">
                <p>&copy <span id="copyrightYear"> </span> by Fanfarenzug Rottweil 1978 e.V. </p>
            </div> <!-- Ende des Footers -->
        </wrapper>
    </div>

    <!-- Einbinden aller nötigen Scripte -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.smartmenus.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="js/app.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': "Bild %1 von %2",
            'showImageNumberLabel': true
        })
    </script>
</body>

</html>