<?php

namespace src\Controller;
use src\Component\Container;

abstract class BaseController{
    protected $template;

    public function getService($service){

        $containter = new Container();
        $this->template = $containter->get($service);

    }

}