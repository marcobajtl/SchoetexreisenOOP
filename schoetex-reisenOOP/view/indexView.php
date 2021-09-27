<?php
/** @var array $arrAngebote */
?>

<div class="picture">
    <img src="bilder/index/Strand_Palmen2.png" alt="Strand mit Palmen">
</div>
<div class="container text-section">
    <div class="row">
        <h2>Die beliebtesten Kategorien</h2>
    </div>
    <div class="row categories">
        <div class="col col-lg-4">
            <a href="#"><img src="bilder/index/hotel.jpg" alt=""><br>Hotel <i class="fa-duotone fa-bed"></i></a>
        </div>
        <div class="col col-lg-4">
            <a href="#"><img src="bilder/index/flugzeug.jpg" alt=""><br>Hotel mit Flug <i class="fa-duotone fa-bed"></i>
                <i class="fa-duotone fa-plane"></i></a>
        </div>
        <div class="col col-lg-4">
            <a href="#"><img src="bilder/index/rundreise.jpg" alt=""><br>Rundreise <i
                    class="fa-duotone fa-globe"></i></a>
        </div>
    </div>
</div>
<div class="text-section container">
    <div class="row"><h2>Urlaub günstig buchen <i class="fad fa-plane-departure"></i></h2></div>
    <div class="row"><p>Cluburlaub im Premium-Segment bietet eine schier unglaublich groBe Anzahl an Möglichkeiten.
            Gerade bei den
            namhaften Anbietern wie <br>
            Robinson Club und Aldiana profitieren Sie dabei von inzwischen so manchen Jahren Erfahrung mit Urlaub, der
            mehr
            ist, als bloBer<br>
            Hotelaufenthalt, und mehr bietet als nur Unterkunft und Verpflegung. Club-Reisen sind beliebt, denn für
            jeden
            gibt es den passenden Club,<br>
            der eine hochwertige Urlaubsatmosphäre und unterschiedlichste Gelegenheiten fur vielfältiges Urlaubserleben
            garantiert. Cluburlaub für <br>
            gesellige Freizeit und individuellen Freiraum.
        </p></div>
</div>
<div class="container text-section">
    <div class="row">
        <h2>Verfügbare Hotels <i class="fa-duotone fa-umbrella-beach"></i></h2>
    </div>
    <div class="row angebote">
        <?php
        foreach ($arrAngebote as $zeile) {
            echo "<div class='col col-sm 6 col-xl-4 angebote'>
                    <div class='angebotboarder'>
                        <div class='ctr'>
                            <a href='rooms.php?ID=$zeile->intID'>
                            <img class='' alt='' src='bilder/angebote/$zeile->strOrt.jpg'></a>
                        </div>
                        <div>
                            <div>
                                <p class='name'> $zeile->strOrt </p>
                            </div>
                           <div class='price'>
                                <a href='rooms.php?ID=$zeile->intID' class=''>7 Tage ab $zeile->floatPreis,- € pro Person</a>
                           </div>
                        </div>
                    </div>
                 </div>";
        }
        ?></div>
</div>
<div class="text-section container veranstalter">
    <div class="row"><h2>Veranstalter <i class="fad fa-handshake"></i></h2></div>

    <img src="bilder/index/aldiana.png" alt="Aldiana">
    <img src="bilder/index/Magic.png" alt="Tui Magic Life">
    <img src="bilder/index/Robinson.png" alt="Robinson">

</div>

<div class="text-section container">
    <div class="row"><h2>Urlaub für Jedermann <i class="fad fa-glass-cheers"></i></h2></div>
    <div class="row"><p>Alleinreisende, Paare, Familien, Jung und Alt, Sportler und Erholungssuchende, Sonnenanbeter und
            Wintersportler,
            Partymenschen und <br>
            Kulturinteressierte ... Club-Reisen bieten für jeden das passende Angebot. Die mit Bedacht gewählten Orte
            der
            jeweiligen Clubanlagen und ihre <br>
            komfortable Ausstattung mit Ambiente zum Wohlfühlen machen es leicht, den Alltag zu vergessen und ganz im
            Urlaub
            zu sein. Wie und wo Sie <br>
            Ihren Cluburlaub genießen möchten, entscheiden Ihre persönlichen Vorlieben. Für die einen darf es in Europa
            sein, weil eine kurze Reisezeit und <br>
            gewisse kulturelle Ähnlichkeiten wichtig sind, andere zieht es in die Ferne, weil es nicht weit genug vom
            Alltag
            entfernt sein kann. <br> <br>

            Die einen suchen den Clu b mit dem besten Tauchrevier und den buntesten Fischen darin, die anderen möchten
            bei
            alpinen Touren möglichst <br>
            hoch hinauf. Manche achten auf exklusive Spa-Erlebnisse und auf viele Greens für Golf ultimativ. Besonders
            Familien mit Kindern oder auch <br>
            Alleinreisende mit Kindern bevorzugen eine der TUI KIDS CLUB oder Magic Life Clubanlagen, wegen des
            umfangreichen Programms für Kinder. <br>
            Zudem haben Sie vor Ort die Möglichkeit interessante Ausflüge oder abenteuerliche Touren zu buchen.
            Club-urlaub.de bietet Ihnen eine <br>
            vielseitige Palette an Möglichkeiten und Destinationen, um Ihren passenden Cluburlaub zu finden. Dabei wird
            außerdem auf höchste Qualität und <br>
            einen herausragenden Service geachtet. <br><br>
        </p>
    </div>
</div>
