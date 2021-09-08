<?php
include 'app/Model/Clientes.php';


class ErrorController extends Clientes
{
    public function __construct()
    {
        parent::__construct();
        $this->view = '404.php';
    }

}