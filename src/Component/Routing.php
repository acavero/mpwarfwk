<?php
namespace src\Component;


class Routing {

    public function __construct(){
        echo "Routing";

    }

    public function enroute($url){
        echo $url;


    }
    public function salute(){
        echo "Hola soy el routing";
    }
}