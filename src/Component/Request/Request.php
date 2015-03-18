<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 13/03/15
 * Time: 17:58
 */

namespace src\Component\Request;


class Request {


    public $get;
    public $post;
    public $server;
    public $cookies;
    public $session;
    public $urlItems;

    public function __construct()//Session $session)
    {
        $this->get = new Parameters($_GET);
        $this->post = new Parameters($_POST);
        $this->server = new Parameters($_SERVER);
        $this->cookie = new Parameters($_COOKIE);
        //$this->session = $session;

        $this->urlParser();
        $_GET = $_POST = $_COOKIE = $_SERVER = array();
    }

    private function urlParser()
    {
        $urlToParse = $this->server->getValue('REQUEST_URI');
        $goodUrl = trim(filter_var($urlToParse, FILTER_SANITIZE_URL), '/');
        $this->urlItems = explode('/',$goodUrl);


    }



























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