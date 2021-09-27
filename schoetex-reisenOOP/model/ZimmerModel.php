<?php
include "Model.php";
class ZimmerModel extends Model
{
    public $intZimmerNummer;
    public $intHotelID;
    public $intPersonen;
    public $floatPreis;
    public $strVerfuegbar;
    public $strHotelName;

    public function __construct($intZimmerNummer, $intHotelID, $intPersonen, $floatPreis, $strVerfuegbar, $strHotelName)
    {
        $this->intZimmerNummer = $intZimmerNummer;
        $this->intHotelID = $intHotelID;
        $this->intPersonen = $intPersonen;
        $this->floatPreis = $floatPreis;
        $this->strVerfuegbar = $strVerfuegbar;
        $this->strHotelName = $strHotelName;
    }

    public static function loadRooms()
    {
        if (isset($_GET['ID'])) {
            $strSearchReq = intval($_GET['ID']);
            $objAlleZimmer = Model::return_sql_data("SELECT zimmer.Nummer,zimmer.HotelID,zimmer.Personen,zimmer.Preis, zimmer.verfuegbarkeit, hotels.Name
            FROM zimmer
            INNER JOIN hotels ON hotels.ID = zimmer.HotelID WHERE ID={$strSearchReq} ORDER BY Name, Nummer");
        } else {
            $objAlleZimmer = Model::return_sql_data("SELECT zimmer.Nummer,zimmer.HotelID,zimmer.Personen,zimmer.Preis, zimmer.verfuegbarkeit, hotels.Name
            FROM zimmer INNER JOIN hotels ON hotels.ID = zimmer.HotelID ORDER BY Name, Nummer");
        }
        $arrZimmer = [];
        foreach ($objAlleZimmer as $arrRow) {
            $objZimmer = new zimmerModel($arrRow[0], $arrRow[1], $arrRow[2], $arrRow[3], $arrRow[4], $arrRow[5]);
            $arrZimmer[] = $objZimmer;
        }
        return $arrZimmer;
    }

}