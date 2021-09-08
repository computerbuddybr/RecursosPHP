<?php
include 'Model/DBConnect.php';

class DBCRUD extends DBConnect
{
    public function __construct()
    {
        parent::__construct();
        echo 'Eu sou do filho<br>';

    }

    public function create()
    {
        echo $this->sanitize($this->db);

    }

    public function read()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}