<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 13/03/15
 * Time: 17:58
 */

namespace src\Component;


class Response {

    public function __construct(){
        echo "Response construida";
    }

    public function jsonResponse(Array $array){
       var_dump(json_encode($array));
}
}