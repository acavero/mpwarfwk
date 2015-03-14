<?php
namespace src\Component;

class Bootstrap{
    public function __construct(){
    }
    public function execute(){
        $routing = new Routing();
        $request = new Request();
        $controllerCalled = $routing->enroute($request->url());
        var_dump("Controller Called ".$controllerCalled);
        new $controllerCalled();

    }
}