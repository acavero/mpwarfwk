<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 18/03/15
 * Time: 20:00
 */

namespace src\Component;


class Container
{

    private $serviceRoutes;
    private $arguments = array();

    public function __construct()
    {
        $this->serviceRoutes = require('../app/Config/ServiceConfiguration.php');
        $this->get("Template");
    }

    public function get($service)
    {

        if (!array_key_exists($service, $this->serviceRoutes)) {
            throw new \Exception("No existe el servicio, tío!");
        }
        $this->serviceRoutes[$service];
        foreach ($this->serviceRoutes[$service]['arguments'] as $arguments)
        {
            $this->arguments[] = new $arguments;
        }
        $reflector = new \ReflectionClass($this->serviceRoutes[$service]['class']);
        return $reflector->newInstanceArgs($this->arguments);


    }
}

