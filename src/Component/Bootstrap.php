<?php
namespace src\Component;

class Bootstrap{
    public function __construct(){
        echo "hello World with Bootstrap";
        $this->execute();

    }
    public function execute(){
    $routing = new Routing();
        $routing->salute();
    }
}

