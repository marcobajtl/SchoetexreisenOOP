<?php
include "model/hotelModel.php";
include "Controller.php";

class HotelController extends Controller
{

    public function verarbeiteDaten()
    {
        $arrHotels = hotelModel::loadHotels();
        $arrSterne = [];
        foreach ($arrHotels as $arrEinzeln) {
                $strSterne = "";
            foreach (range(1, $arrEinzeln->strSterne) as $stern) {
                $strSterne .= "⭐︁";
            };
            $arrSterne[$arrEinzeln->intID] = $strSterne;
        }
        $seite = 'view/hotelView.php';
        include 'view/layout.php';
    }

}