<?php

class IndexModel
{
    public $intID;
    public $strOrt;
    public $floatPreis;

    public function __construct($intID, $strOrt, $floatPreis)
    {
        $this->intID = $intID;
        $this->strOrt = $strOrt;
        $this->floatPreis = $floatPreis;
    }

    public static function loadAngebote()
    {
        $objDb_con = mysqli_connect("localhost", "root", "", "schoetexreisen", "3306");
        $strSQL = "SELECT * FROM angebote";
        $arrDB_return = mysqli_query($objDb_con, $strSQL);
        $arrDaten_db = mysqli_fetch_all($arrDB_return);
        $arrAngebote = [];
        foreach ($arrDaten_db as $arrRow) {
            $objAngebote = new indexModel($arrRow[0], $arrRow[1], $arrRow[2]);
            $arrAngebote[] = $objAngebote;
        }

        return $arrAngebote;
    }
}