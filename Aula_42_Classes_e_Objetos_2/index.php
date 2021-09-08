<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'Controller/DBController.php';

//Acessando método Static
//DBController::souStatic();
//echo DBController::$souUmaPropStatic;
$db = new DBController();
//$db->souStatic();
//echo $db->souUmaPropStatic;
?>


<?php
include '../todos/footer.php';
?>
