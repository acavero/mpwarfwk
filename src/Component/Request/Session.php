<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 16/03/15
 * Time: 21:24
 */

namespace src\Component\Request;


class Session
{
    private $session;

    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            $this->session = $_SESSION;
        }
    }
    public function getValue($key)
    {
        if (!empty($this->session[$key])){
            return $this->session[$key];

        }
    }

    public function setValue($key, $value)
    {
        $this->session[$key] = $value;

    }


}
