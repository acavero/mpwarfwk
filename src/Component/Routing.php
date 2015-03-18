<?php
namespace src\Component;
use src\Component\Request\Request;

class Routing {

    private $routes;

    public function __construct(){
        $this->routes = require('../app/Config/RouteConfiguration.php');
    }

    public function url(Request $request){
        $request->server->getValue("REQUEST_URI");
    }

    public function controllerToCall($controllerPath){
        $controller = array_search($controllerPath, $this->routes);
        return $controller;
    }


}