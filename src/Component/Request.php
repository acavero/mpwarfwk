<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 13/03/15
 * Time: 17:58
 */

namespace src\Component;


class Request {
    protected $url;
    protected $requestMethod;

    public function __construct($url, $requestMethod){
        $this->url = $url;
        $this->requestMethod = $requestMethod;
    }

    public function getUrl(){
        return strtolower($this->url);
    }


}