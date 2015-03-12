<?php
namespace src\Component;

class Bootstrap{
    public function __construct(){
        echo "hello World with Bootstrap <br>";
    }
    public function execute(){
        $routing = new Routing();
        $routing->salute();
        $currentUrl = $_SERVER['REQUEST_URI'];
        $controllerCalled = $routing->enroute($currentUrl);
        var_dump( $controllerCalled . " Controlador en BOOTSTRAP");
        var_dump($currentUrl);
        new $controllerCalled();

    }
}


