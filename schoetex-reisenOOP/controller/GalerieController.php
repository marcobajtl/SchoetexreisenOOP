<?php
include "Controller.php";
include "model/galerieModel.php";

class GalerieController extends Controller
{

    public function verarbeiteDaten()
    {
        $intCounter = 1;
        $arrHotelImgCount = [];
        $objFileSystem = new FilesystemIterator("./bilder/hotels/$intCounter", FilesystemIterator::SKIP_DOTS);
        $intHotelCount = iterator_count($objFileSystem);
        while($intCounter < $intHotelCount){
            $objFileSystem = new FilesystemIterator("./bilder/hotels/$intCounter", FilesystemIterator::SKIP_DOTS);
            $arrHotelImgCount[$intCounter] = iterator_count($objFileSystem);
            $intCounter++;
        }


        $arrGalerie = galerieModel::loadGalerie();
        $seite = 'view/galerieView.php';
        include 'view/layout.php';
    }
}