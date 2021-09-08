<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'Model/Carro.php';

class Prop{

    public function __construct(private $bananinha){


    }
//    public function sobrenome(private $sobrenome){
//
//    }


    public function ola(){
        echo "Olá, sou a ". $this->bananinha;
    }
}

$propriedade = new Prop('Adriana');
//$propriedade->sobrenome('Cerdeira');

display_info($propriedade, "Objeto");
$propriedade->ola();










include '../todos/footer.php';
?>
