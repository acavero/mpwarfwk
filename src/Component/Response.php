<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 13/03/15
 * Time: 17:58
 */

namespace src\Component;


class Response {

   public function jsonResponse(Array $array){
       return json_encode($array);
}
}