<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 16/03/15
 * Time: 19:01
 */

namespace src\Template;


class TwigTemplate implements TemplateInterface{

    private $view;
    private $twigInstance;
    const TEMPLATE_PATH = '../app/Template';
    const TEMPLATE_CACHE_PATH = '../app/Template/Cache';

    public function __construct(){
    $loader = new \Twig_Loader_Filesystem(self::TEMPLATE_PATH);
    $this->twigInstance = new \Twig_Environment($loader,
        array(
            'cache' => self::TEMPLATE_CACHE_PATH,
        ));

    }

    public function draw($template, Array $variables){
       return $this->view->render($template, $variables);
    }
}