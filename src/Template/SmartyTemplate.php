<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 16/03/15
 * Time: 19:01
 */

namespace src\Template;


class SmartyTemplate implements TemplateInterface {

    public $view;
    const TEMPLATE_PATH = '../app/Template';
    const COMPILE_PATH = '../app/Template/templates_c';


    public function __construct(\Smarty $smarty){
        $this->view = new $smarty;
        $this->view->setTemplateDir(self::TEMPLATE_PATH);
        $this->view->setCompileDir(self::COMPILE_PATH);
    }

    public function draw($template, $name=null , $variables=null){

        $this->view->assign($name, $variables);

        return $this->view->fetch($template);
    }

    public function assignVariables($variables){
        foreach ($variables as $key=>$value){
            $this->view->assign($key,$value);
        }
    }
}


