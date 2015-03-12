<?php
namespace src\Component;

class Bootstrap{
    public function __construct(){
    }
    public function execute(){
        $routing = new Routing();
        $currentUrl = $_SERVER['REQUEST_URI'];
        $controllerCalled = $routing->enroute($currentUrl);
        new $controllerCalled();

    }
}


