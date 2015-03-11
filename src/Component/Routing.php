<?php
namespace src\Component;


class Routing {

    private $routes;
    public function __construct(){
        require(__DIR__ . '/../Config/RouteConfiguration.php');
        var_dump("var_dump");
    }

    public function enroute($url){
        echo $url;
    }
    public function salute(){
        echo "Hola soy el routing";
    }
}