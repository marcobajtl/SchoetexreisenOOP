<?php
include "Model.php";

class GalerieModel extends Model
{
    public $intHotelID;
    public $strHotelName;

    public function __construct($intHotelID, $strHotelName){
        $this->intHotelID = $intHotelID;
        $this->strHotelName = $strHotelName;
    }

    public static function loadGalerie(){
        if(isset($_GET["ID"])){
            $objHotelDaten = Model::return_sql_data("SELECT ID, Name FROM hotels where ID = {$_GET['ID']}");
        }else{
            $objHotelDaten = Model::return_sql_data("SELECT ID, Name FROM hotels");
        }
        $arrHoteldaten = [];
        foreach ($objHotelDaten as $arrRow){
            $objDaten = new galerieModel($arrRow[0], $arrRow[1]);
            $arrHoteldaten[] = $objDaten;
        }
        return $arrHoteldaten;

    }
}