<?php
session_start();
include 'app/Controller/LoginController.php';
include 'app/Controller/Router.php';
include 'app/View/includes/functions.php';
include 'app/View/includes/header.php';

$logado = new LoginController();
if ($logado->logado) {
    include 'app/View/includes/cabecalho_logado.php';
    $router = new Router();
    include "app/Controller/$router->controller.php";
    $controller = new $router->controller();
    $dados = $controller->dados;
//Include View
    include "app/View/$controller->view";

} else {
    include 'app/View/includes/cabecalho_nao_logado.php';
    include "app/View/login.php";
}
?>


<?php
include 'app/View/includes/footer.php';
?>
