<?php
include "Controller.php";
include "model/KontaktModel.php";

class kontaktController extends Controller
{

    public function receiveData()
    {
        if (isset($_POST["firstname"])) {
            $strFirstname = $_POST["firstname"];
            $strLastname = $_POST["lastname"];
            $strEmail = $_POST["email"];
            $intAlter = $_POST["alter"];
            $strKategorie = $_POST["kategorie"];
            $strNachricht = $_POST["subject"];
            KontaktModel::writeMessageToDB($strFirstname, $strLastname, $strEmail, $intAlter, $strKategorie, $strNachricht);
            return true;
        } else {
            return false;
        }
    }

    public function verarbeiteDaten()
    {
        $sent = $this->receiveData();
        $seite = 'view/kontaktView.php';
        include 'view/layout.php';
    }
}