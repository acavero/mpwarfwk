<?php
namespace src\Component;

class Bootstrap{
    public function __construct(){
    }
    public function execute(){
        $routing = new Routing();
        $request = new Request($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
        $controllerCalled = $routing->enroute($request->getUrl());
        var_dump("Controller Called ".$controllerCalled);
        new $controllerCalled();

    }
}