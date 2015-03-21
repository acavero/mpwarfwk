<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 13/03/15
 * Time: 17:58
 */

namespace src\Component\Response;


class HttpResponse {

    private $content;
    private $status;

    public function __construct($content, $status = 200){
        $this->content = $content;
        $this->status = $status;
    }


    public function send(){
        if ($this->status != 200){

            header("HTTP/1.0 404 Not Found");

        }
        echo $this->content;
    }

}