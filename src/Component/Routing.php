<?php
namespace src\Component;

class Routing {

    private $routes;

    public function __construct(){
        $rootDirectory = $_SERVER['DOCUMENT_ROOT'];
        $this->routes = require($rootDirectory . '/../app/Config/RouteConfiguration.php');
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