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
            <link href="css/styles.css" rel="stylesheet">    
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
        </head>

        <style rel="stylesheet">
      .photo-gallery {
  color:#313437;
  background-color:#fff;
}

.photo-gallery p {
  color:#7d8285;
}

.photo-gallery h2 {
  font-weight:bold;
  margin-bottom:40px;
  padding-top:40px;
  color:inherit;
}

@media (max-width:767px) {
  .photo-gallery h2 {
    margin-bottom:25px;
    padding-top:25px;
    font-size:24px;
  }
}

.photo-gallery .intro {
  font-size:16px;
  max-width:500px;
  margin:0 auto 40px;
}

.photo-gallery .intro p {
  margin-bottom:0;
}

.photo-gallery .photos {
  padding-bottom:20px;
}

.photo-gallery .item {
  padding-bottom:30px;
}
</style>

<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'albumLabel': "Bild %1 von %2",
      'showImageNumberLabel' : false
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
                            <span><a><a href="index.php?page=topmenu/sitemap" title="Sitemap">Sitemap</a></a></span>
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
                <input id="main-menu-state" type="checkbox"/>
                <label class="main-menu-btn" for="main-menu-state">
                    <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                </label> 
                
                <ul id="main-menu" class="sm sm-simple">
                    <li><a href="#" title="Start">Start</a></li>
                    
                    <li><a href="#" title="Über uns">Über uns</a>
                    <ul>
                        <li><a href="#" title="Vorstand">Vorstand</a></li>
                        <li><a href="#" title="Ausschuss">Ausschuss</a></li>
                        <li><a href="#" title="Instrumente">Instrumente</a></li>
                        <li><a href="#" title="Fahnenschwinger">Fahnenschwinger</a></li>
                        <li><a href="#" title="Satzung">Satzung</a></li>
                    </ul>
                    </li>

                    <li><a href="#" title="Geschichtliches">Geschichtliches</a></li>
                    <li><a href="#" title="Fahnenschwingen">Fahnenschwingen</a>
                    <ul>
                        <li><a href="index.php?page=fahnenschwingen/heute" title="Fahnenschwingen heute">Heute</a></li>
                        <li><a href="index.php?page=fahnenschwingen/geschichte" title="Fahnenschwingen Geschichte">Geschichte</a></li>
                        <li><a href="index.php?page=fahnenschwingen/plazierungen" title="Fahnenschwingen Plazierungen">Plazierungen</a></li>
                    </ul>
                    </li>
                    <li><a href="#" title="Termine">Termine</a></li>
                    <li><a href="#" title="Bilder">Bilder</a>
                    <ul>
                        <li><a href="index.php?page=gallery&year=2010" title="Das Jahr 2010">2010</a></li>
                    </ul>
                    </li>
                    <li><a href="#" title="Presse">Presse</a></li>
                    <li><a href="index.php?page=links" title="Links">Links</a></li>
                </ul>
            </nav> <!-- Ende der Hauptnavigation -->  

            <!-- Inhalt -->
            <div class="maincontent flex-fill">
                <?php
                    // Überprüfen, ob eine Seite ausgewählt wurde
                    if(isset($_GET['page'])) 
                    {
                        $page = $_GET['page'];
                                                
                        // Überprüfen, ob die ausgewählte Seite existiert
                        if(file_exists("pages/$page.php")) 
                        {
                            include("pages/$page.php");
                        } 
                        else 
                        {
                            include("pages/404.php");
                        }
                    } 
                    else 
                    {
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
    </body>  
</html>
