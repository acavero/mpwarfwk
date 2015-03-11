<?php
namespace src\Component;


class Routing {

    private $routes;

    public function __construct(){
        $this->routes = require(__DIR__ . '/../Config/RouteConfiguration.php');
        $this->salute();
    }

    public function enroute($url){
        echo $url;
        $controllerToCall = array_search($url, $this->routes);
        var_dump($controllerToCall);
        $controller = new $controllerToCall;
        $controller->build();
    }
    public function salute(){
        echo "Hola soy el routing";
        var_dump($this->routes);
    }

}