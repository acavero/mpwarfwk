<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 13/03/15
 * Time: 12:12
 */

namespace src\Component;


class KernelConfiguration {
    protected $enviromentConfiguration;

    public function __construct(){
        $rootDirectory = $_SERVER['DOCUMENT_ROOT'];
        $this->enviromentConfiguration = require($rootDirectory . '/../app/Config/EnviromentConfiguration.php');
    }

    public function defineEnviroment(){
        if($this->enviromentConfiguration["Enviroment"] === "Develop"){
            echo "<h1> Entorno de Desarrollo </h1>";
            echo "<br> Debug Bar: Activated <br>";
            echo "<br> Error print: Activated <br>";
            echo "<br> Let's Code some shit <br>";
        }
        if ($this->enviromentConfiguration["Enviroment"] === "Production"){
            echo "<h1> Entorno de Producción </h1>";
            echo "<br> Shit just got serious <br>";
        }
    }

    public function defineTemplate(){
        if($this->enviromentConfiguration["Template"] === "Twig"){
            echo "<br> Twig is the way to paint <br>";
        }
        if ($this->enviromentConfiguration["Template"] === "Smarty"){
            echo "<br> Smarty is the way to paint <br>";
        }
    }

}