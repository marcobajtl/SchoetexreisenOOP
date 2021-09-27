<?php
/** @var array $arrHotels
 *  @var array $arrSterne
 */
?>
<div class="container text-section">
    <div class="row">
        <h2>Verfügbare Hotels <i class="fa-duotone fa-umbrella-beach"></i></h2>
    </div>

    <?php
    foreach ($arrHotels as $zeile) {
        echo "<div class='row'>
        <div class='col-12 col-sm-11 col-xxl-6 col-lg-9 hotelboarder'><div>
            <div class='row'>
                <div class='col-12 col-md-6 col-sm-12'>
                <div class='col nopad hotelimg'>
                <img src='bilder/hotels/$zeile->intID/1.jpg' alt=''></div>
                <br><div class='row sm-pic'>
                <div class='col col-xl-3'><a href='galerie.php?ID=$zeile->intID'><img src='bilder/hotels/$zeile->intID/1.jpg' alt=''></a></div>
                <div class='col col-xl-3'><a href='galerie.php?ID=$zeile->intID'><img src='bilder/hotels/$zeile->intID/2.jpg' alt=''></a></div>
                <div class='col col-xl-3'><a href='galerie.php?ID=$zeile->intID'><img src='bilder/hotels/$zeile->intID/3.jpg' alt=''></a></div>
                <div class='col col-xl-3'><a href='galerie.php?ID=$zeile->intID'><img src='bilder/hotels/$zeile->intID/4.jpg' alt=''></a></div>
                </div></div>
                <div class='col col-xxl-6'>
                    <div class='infosection'>
                    <div class='row'>$zeile->strHotelName</div>
                    <div class='row'>Ort: $zeile->strHotelOrt</div>
                    <div class='row stars'>Sterne: <div>{$arrSterne[$zeile->intID]}</div>
                    </div>
                    <div class='row'>Verfügbare Zimmer: $zeile->intAnzahlZimmer</div> <br><br>
                    <div class='row'><input type='button' class='zimmerbtn' onclick='location.href=\"zimmer.php?ID=$zeile->intID\"' value='Zimmer anzeigen'></div>
                </div>
                </div>
            </div></div>
        </div>
        <div class='col col-sm-1 col-xxl-6 col-lg-3'>
        </div>
    </div>";
    } ?>
</div>
