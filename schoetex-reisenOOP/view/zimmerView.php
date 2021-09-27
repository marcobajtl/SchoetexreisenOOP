<?php
/** @var array $arrZimmer
 *  @var array $hotelname
 */
?>

<div class='container text-section'>
    <div class='row'>
        <h2>Verfügbare Zimmer <i class='fa-duotone fa-umbrella-beach'></i></h2>
    </div>
    <?php
        foreach ($arrZimmer as $value) {
            echo "

        <div class='row'>
            <div class='col-12 col-sm-11 col-xxl-8 col-lg-9 hotelboarder'>
                <div class='row'>
                    <div class='col-12 col-md-6 col-sm-12 nopad'>
                    <div class='row picheader nopad'><div class=''>$value->strHotelName</div></div>
                    <div class='row nopad roomimg'>
                        <div><a href='
                           galerie.php?ID=$value->intHotelID'><img src='bilder/hotels/$value->intHotelID/1.jpg' alt=''></a></div> 
                    </div>
                    </div>
                    <div class='col col-xxl-6 '>
                        <div class=''>
                        <div class='infosectionroom'>
                            <div class='row'><p>Zimmernummer: $value->intZimmerNummer</p></div>
                            <div class='row'><p>Personen: $value->intPersonen</p></div>
                            <div class='row'><p>Preis: {$value->floatPreis}€</p></div>
                            <div class='row status'><p>Status: $value->strVerfuegbar</p></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col col-sm-1 col-xxl-4 col-lg-3'>
            </div>
        </div>
   ";

    }
    ?>
</div>
