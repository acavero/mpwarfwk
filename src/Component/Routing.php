<?php
namespace src\Component;
use src\Controller;


class Routing {

    private $routes;

    public function __construct(){
        $this->routes = require(__DIR__ . '/../Config/RouteConfiguration.php');
    }

    public function enroute($url){
        $controllerToCall = array_search($url, $this->routes);
        var_dump($controllerToCall);
        return ($controllerToCall);
    }
    public function salute(){
        echo "Hola soy el routing <br>";
    }

}