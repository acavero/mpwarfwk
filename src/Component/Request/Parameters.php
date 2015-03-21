<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 16/03/15
 * Time: 20:10
 */

namespace src\Component\Request;


class Parameters {

    private $parameters;
    public function __construct(Array $parameters){
        $this->parameters = $parameters;
    }



    public function getValue($key){
        if (!empty($this->parameters[$key]))
        {
            return $this->parameters[$key];
        }
    }
}
