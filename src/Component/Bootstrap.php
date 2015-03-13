<?php
namespace src\Component;

class Bootstrap{
    public function __construct(){
    }
    public function execute(){
        $routing = new Routing();
        $currentUrl = $_SERVER['REQUEST_URI'];
        if ($routing->isEmptyUrl($currentUrl)){
            die();
        }
        $controllerCalled = $routing->enroute($currentUrl);
        new $controllerCalled();

    }
}