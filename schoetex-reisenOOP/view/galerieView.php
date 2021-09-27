<?php
/** @var array $arrGalerie
 *  @var array $arrHotelImgCount
 */

?>

<div class="container">
    <div class="hotelimg">
        <?php
        foreach ($arrGalerie as $zeile) {
            $ID = $zeile->intHotelID;
            $intImageCount = $arrHotelImgCount[$ID];
            echo '
            <div class="row justify-content-center">
                <div class="col col-lg-7 galerieblock">
                    <div class="row ">
                        <div class="galerieheader">
                            <h2>' . $zeile->strHotelName . '</h2>
                        </div>
                    </div>
                    <div class="galerieImgSection">
                    <div class="row galeriemainimg">
                        <div class="col col-lg-12" >
                            <img class="toggleon" id="mainimg' . $ID . '" src="bilder/hotels/' . $ID . '/1.jpg" alt="">
                        </div>
                        <div id="overlay">
                        <div id="text"><img id="overlayimg" src="bilder/hotels/' . $ID . '/1.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="row galeriesubimg">
                        <a class="prev" data-hotelid="' . $ID . '" data-imgCount="'.$intImageCount.'">&#10094;</a>
                        <a class="next" data-hotelid="' . $ID . '" data-imgCount="'.$intImageCount.'">&#10095;</a>
                    </div>
                </div>
                </div>
            </div>';
        }
        ?>

        <script src="JS/galerie.js"></script>
    </div>
</div>