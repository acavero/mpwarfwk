<?php
namespace src\Component;
use src\Component\Request\Request;

class Routing {

    private $routes;

    public function __construct(){
        $this->routes = require('../app/Config/RouteConfiguration.php');

    }

    public function enroute(Request $request){
        $url = $request->server->getValue("REQUEST_URI");
        return ($controllerToCall = array_search($url, $this->routes));
    }

  
}