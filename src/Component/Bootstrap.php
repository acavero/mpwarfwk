<?php
namespace src\Component;

use src\Component\Request\Request;
class Bootstrap{
    public function __construct(){
    }
    public function execute(Request $request){

        $routing = new Routing();
        $request->salute();
        $controllerCalled = $routing->enroute($request->url());
        new $controllerCalled();

    }
}