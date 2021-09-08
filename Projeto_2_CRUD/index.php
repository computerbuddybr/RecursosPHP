<?php
include 'app/View/includes/functions.php';
include 'app/View/includes/header.php';
include 'app/Controller/Router.php';

$router = new Router();
include "app/Controller/$router->controller.php";
$controller = new $router->controller();
$dados = $controller->dados;
//Include View
include "app/View/$controller->view";


?>


<?php
include 'app/View/includes/footer.php';
?>
