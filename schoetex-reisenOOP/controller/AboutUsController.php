<?php
include "Controller.php";
class AboutUsController extends Controller{

    public function verarbeiteDaten()
    {
        $seite = 'view/aboutUsView.php';
        include 'view/layout.php';
    }
}