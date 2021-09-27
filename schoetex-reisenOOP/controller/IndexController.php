<?php
include "model/indexModel.php";
include "Controller.php";

class IndexController extends Controller
{

    public function verarbeiteDaten()
    {
        $arrAngebote = indexModel::loadAngebote();
        $seite = 'view/indexView.php';
        include 'view/layout.php';
    }
}