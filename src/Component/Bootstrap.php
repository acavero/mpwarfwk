<?php
namespace src\Component;

use src\Component\Request\Request;
use src\Component\Response;
class Bootstrap{
    public function __construct(){
    }
    public function execute(Request $request){
        $routing = new Routing($request);
        $controllerCalled = $routing->enroute($request);
        return $controllerCalled;
    }
}