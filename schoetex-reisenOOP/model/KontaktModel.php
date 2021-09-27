<?php

class KontaktModel
{
    public static function writeMessageToDB($firstname, $lastname, $email, $alter, $kategorie, $nachricht)
    {
        $objConn = new mysqli("localhost", "root", "", "schoetexreisen", "3306");
        $objStatement = $objConn->prepare("INSERT INTO nachrichten(Vorname, Nachname, `E-Mail`, `Alter`, Kategorie, Nachricht) VALUES (?, ?, ?, ?, ? ,?)");
        $objStatement->bind_param("sssiss", $firstname, $lastname, $email, $alter, $kategorie, $nachricht);
        $objStatement->execute();
        $objStatement->close();
        $objConn->close();
    }
}