<!DOCTYPE html>
<?php /** @var string $seite */?>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hotel.css">
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/zimmer.css">
    <link rel="stylesheet" href="css/galerie.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/kontakt.css">
    <link rel="icon" href="favicon.ico" sizes="any" type="image/svg+xml">
    <title>Schötex-Reisen.de</title>
</head>
<body class="d-flex flex-column min-vh-100">
<!-- Navigation Bar & Logo -->
<div class="header">
    <div class="logo">
        <a href="">Schötex-Reisen.de</a><br>
    </div>
    <div class="navibar">
        <ul>
            <li class="<?php if($seite == "view/indexView.php"){echo "active";}?>"><a href="index.php">Startseite <i class="fa-thin fa-home"></i></a></li>
            <li class="<?php if($seite == "view/hotelView.php"){echo "active";}?>"><a href="hotel.php">Hotel <i class="fa-thin fa-hotel"></i></a></li>
            <li class="<?php if($seite == "view/zimmerView.php"){echo "active";}?>"><a href="zimmer.php">Zimmer <i class="fa-thin fa-person-simple"></i></i></a></li>
            <li class="<?php if($seite == "view/galerieView.php"){echo "active";}?>"><a href="galerie.php">Galerie <i class="fa-thin fa-image"></i></a></li>
            <li class="<?php if($seite == "view/aboutUsView.php"){echo "active";}?>"><a href="aboutus.php">Über Uns <i class="fa-thin fa-address-card"></i></a></li>
            <li class="<?php if($seite == "view/kontaktView.php"){echo "active";}?>"><a href="kontakt.php">Kontakt <i class="fa-thin fa-message-lines"></i></a></li>
        </ul>
    </div>
</div>
<!-- End of Navigation Bar & Logo -->
<?php
require $seite;
?>
<!-- Footer-->
<div class="footer mt-auto">
    <div class="container">
        <p>
            Bitte beachten Sie, dass es aufgrund der aktuellen vor Ort geltenden Corona Maßnahmen, zu
            Einschränkungen/Änderungen kommen kann. <br> <br> <br>
            Alle Angaben ohne Gewahr. Es gelten die aktuellen Reisebestimmungen des jeweiligen Reiseveranstalters. <br>
            <br>
            ©Schoetex-Reisen.de 2021
        </p>
    </div>
</div>
</body>
</html>