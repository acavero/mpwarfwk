<?php
namespace src\Component;

use src\Component\Request\Request;
class Bootstrap{
    public function __construct(){
    }
    public function execute(Request $request){

        $routing = new Routing($request);
        $controllerCalled = $routing->enroute($request);
        var_dump($controllerCalled);
        new $controllerCalled();

    }
}