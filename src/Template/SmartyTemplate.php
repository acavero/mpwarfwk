<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 16/03/15
 * Time: 19:01
 */

namespace src\Template;


class SmartyTemplate implements TemplateInterface {

    public $template;
    public function __construct(){
        $this->template = new Smarty();
    }

    public function draw($template){
        //$template = ruta del template
        return $this->fetch($template);
    }
    public function assignVariables($variables){
        foreach ($variables as $key=>$value){
            $this->template->assign($key,$value);
        }
    }
}

