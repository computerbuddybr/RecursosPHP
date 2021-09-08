<?php
include 'Model/DBConnect.php';

/**
 * Created by PhpStorm.
 * User: AdrianaL
 * Date: 30/05/2020
 * Time: 16:10
 */
class DBController
{
    private $db;
    public static $souUmaPropStatic = 'Sou uma propriedade static<br>';

    function __construct()
    {
        $this->db = new DBConnect();
    }


}