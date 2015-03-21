<?php
namespace src\Component;

use src\Component\Request\Request;
use src\Component\Response\HttpResponse;

class Bootstrap
{
    public function execute(Request $request)
    {
        $routing = new Routing($request);
        $controller = array_shift($request->urlItems);

        $method = array_shift($request->urlItems);
        $params = $request->urlItems;
        try {
            $controllerCalled = $routing->controllerToCall($controller);
            return $this->actuationLogic($controllerCalled, $method, $params, $routing);

        }
        catch (\Exception $e) {
            return new HttpResponse("No existe la ruta, tío!", 404);

        }
    }

    private function actuationLogic($controller, $method, $params)
    {
        if (is_null($method)) {
            $method = "init";
        }
        return call_user_func_array(array(new $controller, $method), array($params));



    }
}
