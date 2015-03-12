<?php
namespace src\Component;

class Routing {

    private $routes;

    public function __construct(){
        $rootDirectory = $_SERVER['DOCUMENT_ROOT'];
        $this->routes = require($rootDirectory . '/../app/Config/RouteConfiguration.php');
    }

    public function enroute($url){
        $lowerUrl = strtolower($url);
        return ($controllerToCall = array_search($lowerUrl, $this->routes));
    }

    public function isEmptyUrl($url){
        if(($url) == '/')
        {
            return true;
        }
        return false;
    }
}