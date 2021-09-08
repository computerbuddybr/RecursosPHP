<?php
include 'Model/ProcessarFormCarro.php';

/**
 * Created by PhpStorm.
 * User: AdrianaL
 * Date: 30/05/2020
 * Time: 13:17
 */
class CarroController
{
    public $page;
    public $form;
//TODO: mostrar mostrar_carros
//TODO: mostrar form_carro
//TODO: pegar processar form
    function __construct()
    {
        if (isset($_POST['submit'])) {
            $this->form = new ProcessarFormCarro();
            $this->page = 'View/mostrar_carros.php';
        } else {
            $this->page = 'View/form_carro.php';
        }
    }

}