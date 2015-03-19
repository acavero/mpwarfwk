<?php
namespace src\Component;

class Routing {

    private $routes;

    public function __construct(){
        $this->routes = require('../app/Config/RouteConfiguration.php');
    }

    public function controllerToCall($controllerPath){
        $controller = array_search($controllerPath, $this->routes);
        if ($controller){
            return $controller;
        }
        throw new \Exception;
    }


}