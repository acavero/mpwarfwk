<?php
namespace src\Component;

class Bootstrap{
    public function __construct(){
        echo "hello World with Bootstrap";
        $this->execute();

    }
    private function execute(){
        $routing = new Routing();
        $routing->salute();
        $currentUrl = $_SERVER['REQUEST_URI'];
        $controller = $routing->enroute($currentUrl);
        $controller->build();

    }
}


