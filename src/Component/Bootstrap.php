<?php
namespace src\Component;

use src\Component\Request\Request;
class Bootstrap{
    public function __construct(){
    }
    public function execute(Request $request){

        $routing = new Routing();
        $request->salute();

        $url = $request->server->getValue("REQUEST_URI");
        $controllerCalled = $routing->enroute($url);
        var_dump($controllerCalled);
        new $controllerCalled();

    }
}