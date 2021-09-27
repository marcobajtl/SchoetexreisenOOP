<?php

abstract class Model
{
    protected static function return_sql_data($strSQL){
        $objDb_con = mysqli_connect("localhost", "root", "", "schoetexreisen", "3306");
        $arrDB_return = mysqli_query($objDb_con, $strSQL);
        return mysqli_fetch_all($arrDB_return);
    }
}