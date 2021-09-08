<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'traits.php';

//$sapato = new Sapato();
//$cliente = new Cliente();
//
//$sapato->teste('<p>Teste sapato</p>');
//$cliente->teste('<p>Teste cliente</p>');


//$cliente2 = new Cliente2();
//$cliente2->teste('<p>Teste cliente com conflito</p>');
//echo $cliente2->id;


$teste = new TesteConflito();
$teste->vouSerIgualNosDois1();
$teste->vouSerIgualNosDois2();
$teste->soNoPrimeiro();
$teste->soNoSegundo();
$teste->dandoAlias();
$teste->primeirao();


include '../todos/footer.php';
