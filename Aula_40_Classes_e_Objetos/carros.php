<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'Controller/CarroController.php';

$carro_view = new CarroController();
include $carro_view->page;

?>


<?php
include '../todos/footer.php';
?>
