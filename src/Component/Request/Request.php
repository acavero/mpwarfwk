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

    public function __construct(Session $session)
    {
        $this->get = new Parameters($_GET);
        $this->post = new Parameters($_POST);
        $this->server = new Parameters($_SERVER);
        $this->cookie = new Parameters($_COOKIE);
        $this->session = $session;

        $this->urlParser();
        $_GET = $_POST = $_COOKIE = $_SERVER = array();
    }

    private function urlParser()
    {
        $urlToParse = $this->server->getValue('REQUEST_URI');
        $goodUrl = trim(filter_var($urlToParse, FILTER_SANITIZE_URL), '/');
        $this->urlItems = explode('/',$goodUrl);
    }
}