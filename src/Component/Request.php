<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 13/03/15
 * Time: 17:58
 */

namespace src\Component;


class Request {

    public function url(){
        if(isset($_SERVER['REQUEST_URI']))
        {
        return strtolower($_SERVER['REQUEST_URI']);
        }
    }

    public function method(){
        if (isset($_SERVER['REQUEST_METHOD']))
        {
            return $_SERVER['REQUEST_METHOD'];
        }
    }

    public function cookie($value){
        if(isset($_COOKIE['$value']))
        {
            return $_COOKIE['$value'];
        }
    }

    public function session($value){
        if(isset($_SESSION['$value']))
        {
            return $_SESSION['$value'];
        }
    }

    public function files($value){
        if(isset($_FILES['$value']))
        {
            return $_FILES['$value'];
        }
    }



}