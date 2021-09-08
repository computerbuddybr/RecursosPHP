<?php
include 'app/Model/Clientes.php';


class HomeController extends Clientes
{
    //Pré-refatoração
//    public $dados;
//    public $view = 'clientes.php';

    public function __construct()
    {

//        $info = new Clientes();
//        $this->dados = $info->read();
        parent::__construct();
        $this->dados = $this->read();
        $this->view = 'clientes.php';

    }
}