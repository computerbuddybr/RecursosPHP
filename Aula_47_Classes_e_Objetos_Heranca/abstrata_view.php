<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'abstrata.php';


$obj = new Concreta();
$obj->mostrar();
$obj->semCorpo();


include '../todos/footer.php';