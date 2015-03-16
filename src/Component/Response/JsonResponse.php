<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 16/03/15
 * Time: 20:26
 */

namespace src\Component\Response;


class JsonResponse {

    private $content;
    private $status;

    public function __construct($content, $status = 200){
        $this->content = $content;
        $this->status = $status;
    }


    public function send(){
        if (!($this->status === 200)){
            header("HTTP/1.0 404 Not Found");
        }
        header('Content-Type: application/json');

        echo $this->content;
        if(!(is_array($this->content)) ){
         $this->content = array($this->content);
        }
        return json_encode($this->content);
    }
}
