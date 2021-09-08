<?php
include 'app/Model/Clientes.php';


class HomeController extends Clientes
{

    public function __construct()
    {
        parent::__construct();
        $this->dados = $this->read();
        $this->view = 'clientes.php';
    }
}