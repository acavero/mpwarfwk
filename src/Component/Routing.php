<?php
namespace src\Component;

class Routing {

    private $routes;

    public function __construct(){
        $this->routes = require('../app/Config/RouteConfiguration.php');
    }

    public function enroute($url){
        return ($controllerToCall = array_search($url, $this->routes));
    }

    public function isEmptyUrl($url){
        if(($url) == '/')
        {
            return true;
        }
        return false;
    }
}