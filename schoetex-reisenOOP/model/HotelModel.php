<?php
include "Model.php";

class HotelModel extends Model
{
    public $intID;
    public $strHotelName;
    public $strHotelOrt;
    public $intAnzahlZimmer;
    public $strSterne;

    public function __construct($intID, $strHotelName, $strHotelOrt, $intAnzahlZimmer, $strSterne)
    {
        $this->intID = $intID;
        $this->strHotelName = $strHotelName;
        $this->strHotelOrt = $strHotelOrt;
        $this->intAnzahlZimmer = $intAnzahlZimmer;
        $this->strSterne = $strSterne;
    }

    public static function loadHotels()
    {
        $arrDaten_db = Model::return_sql_data("SELECT * FROM hotels");
        $arrAngebote = [];
        foreach ($arrDaten_db as $arrRow) {
            $intZimmerFrei = Model::return_sql_data("SELECT COUNT(Verfuegbarkeit) FROM zimmer WHERE Verfuegbarkeit = 'Verfügbar' AND HotelID = ".$arrRow[0]);
            $strSterne = "";
            $objAngebote = new hotelModel($arrRow[0], $arrRow[1], $arrRow[2], $intZimmerFrei[0][0], $arrRow[4]);
            $arrAngebote[] = $objAngebote;
        }
        return $arrAngebote;
    }

}