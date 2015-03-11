<?php
namespace src\Component;


class Routing {

    private $routes;
    public function __construct(){
        $this->$routes = require('../Config/RouteConfiguration.php');
        echo $this->routes;
    }

    public function enroute($url){
        echo $url;



    }
    public function salute(){
        echo "Hola soy el routing";
    }
}