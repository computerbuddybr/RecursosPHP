<?php


class Router
{
    private $page;
    private $routes = [
        'create' => 'CreateController',
        'update' => 'UpdateController',
        'delete' => 'DeleteController',
        'home' => 'HomeController',
        '404' => 'ErrorController'


    ];
    public $controller;


    public function __construct()
    {
        if (isset($_GET['page'])) {
//Verificar se a página é valida e se não devolver um 404.
            if (array_key_exists($_GET['page'], $this->routes)) {
                $this->page = $_GET['page'];

            } else {
                $this->page = '404';
            }
        } else {
            $this->page = 'home';
        }
        $this->controller = $this->routes[$this->page];
    }

}