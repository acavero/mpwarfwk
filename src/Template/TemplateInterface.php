<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 16/03/15
 * Time: 18:59
 */

namespace src\Template;


interface TemplateInterface {
    public function draw($template, $name=null, $variables=null);
}
