<?php
/* @var string $sent
 *
 */
?>
<div class="container">
    <div class="form-container">
        <form name="Form" action="kontakt.php" method="post">
            <div class="">
                <?php
                if ($sent == true) {
                    echo '<div class="alert alert-success mrg-top">
                        <strong>Nachricht wurde übermittelt!</strong> Ein Mitarbeiter wird sich schnellstmöglich mit Ihnen in Kontakt setzten.
                    </div>';
                }
                ?>
                <div>
                    <label for="name">Name*</label>
                    <input class="inputfield importantfield required" type="text" name="firstname" placeholder="Name" required>
                </div>
                <div>
                    <label for="nachname">Nachname*</label>
                    <input class="inputfield importantfield required" type="text" name="lastname"
                           placeholder="Nachname" required>
                </div>
                <div>
                    <label for="email">E-Mail Adresse*</label>
                    <input class="inputfield importantfield required" type="email" name="email"
                           placeholder="example@test.de" required>

                    <div>
                        <label for="Alter">Alter</label>
                        <input class="inputfield importantfield " type="number" name="alter" min="1" max="120"
                               placeholder="Dein Alter.">
                    </div>
                    <div>
                        <label for="Kategorie">Kategorie</label>
                        <select id="kategorie" name="kategorie">
                            <option value="none">--Bitte auswählen--</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Service">Service</option>
                            <option value="Preis">Preis</option>
                            <option value="Sonstiges">Sonstiges</option>
                        </select>
                    </div>
                    <div>

                        <label for="subject">Nachricht*</label>
                        <textarea class="importantfield required" name="subject"
                                  placeholder="Hier Nachricht eingeben." required></textarea>
                    </div>
                    <div class="submitbtn">
                        <input type="submit" value="Absenden">
                    </div>
                    <p>Die mit einem * gekennzeichneten Felder sind Pflichtfelder.</p>
                </div>
        </form>
    </div>
</div>
</div>
<script src="JS/kontakt.js"></script>