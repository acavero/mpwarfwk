<?php
namespace src\Component;

class Routing {

    private $routes;

    public function __construct(){
        $rootDirectory = $_SERVER['DOCUMENT_ROOT'];
        var_dump($rootDirectory);
        $this->routes = require($rootDirectory . '/../app/Config/RouteConfiguration.php');
    }

    public function enroute($url){
        return ($controllerToCall = array_search($url, $this->routes));
    }

    public function salute(){
        echo "Hola soy el routing <br>";
    }

}