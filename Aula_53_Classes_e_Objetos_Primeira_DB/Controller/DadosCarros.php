<?php
include 'Model/DBCRUD.php';

/**
 * Created by PhpStorm.
 * User: AdrianaL
 * Date: 30/05/2020
 * Time: 16:10
 */
class DadosCarros
{
    public $dados;
    public $page;
    private $db;

    function __construct()
    {
        $this->db = new DBCRUD();

        $this->page = 'View/mostrar_carros.php';
        $this->dados = $this->db->read();

        $this->db->closeConnection();


    }


}