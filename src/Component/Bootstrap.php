<?php
namespace src\Component;

use src\Component\Request\Request;
use src\Component\Response;

class Bootstrap{
    public function __construct(){

    }
    public function execute(Request $request){
        // $this->actuationLogic($request);
        $routing = new Routing($request);
        $routing->url($request);
        $controller = array_shift($request->urlItems);
        $method = array_shift($request->urlItems);
        $params = $request->urlItems;
        $controllerCalled = $routing->controllerToCall($controller);
        return call_user_func_array(array(new $controllerCalled, $method), array($params));
    }

    private function actuationLogic(Request $request){
        $routing = new Routing($request);
        $routing->url($request);
        if (count($request->urlItems)<1){
            die();
        }
    }
}