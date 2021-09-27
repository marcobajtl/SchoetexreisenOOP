<?php
include "model/zimmerModel.php";
include "Controller.php";
class ZimmerController extends Controller
{

    public function verarbeiteDaten()
    {
        $arrZimmer = zimmerModel::loadRooms();
        $seite = 'view/zimmerView.php';
        include 'view/layout.php';
    }
}