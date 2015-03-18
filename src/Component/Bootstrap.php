<?php
namespace src\Component;

use src\Component\Request\Request;
use src\Component\Response;

class Bootstrap{
    public function __construct(){

    }
    public function execute(Request $request){
        $routing = new Routing($request);
        $controller = array_shift($request->urlItems);
        $method = array_shift($request->urlItems);
        $params = $request->urlItems;
        $controllerCalled = $routing->controllerToCall($controller);
        return $this->actuationLogic($controllerCalled, $method, $params, $routing);
    }

    private function actuationLogic($controller, $method, $params, Routing $routing){

        if (empty($controller))
        {
            $controller = $routing->controllerToCall('/');
        }
        if (is_null($method))
        {
            $method = "salute";
        }
        return call_user_func_array(array(new $controller, $method), array($params));
    }



}