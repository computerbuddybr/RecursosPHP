<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'Model/DBCRUD.php';

//Acessando propriedade do pai
$db = new DBCRUD();
$db->create();
?>


<?php
include '../todos/footer.php';
?>
