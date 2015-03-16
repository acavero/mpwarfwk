<?php
namespace src\Component;

class Bootstrap{
    public function __construct(){
    }
    public function execute(){
        $routing = new Routing();
        $request = new Request();
        $controllerCalled = $routing->enroute($request->url());
        new $controllerCalled();

    }
}