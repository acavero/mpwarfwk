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


        }
        if ($this->enviromentConfiguration["Enviroment"] === "Production"){
            error_reporting(0);

        }
    }
    public function defineDatabase(){
        if($this->enviromentConfiguration["Enviroment"] === "Develop") {
            $databaseConfiguration = require ('../app/Config/DBConfig/DevelopDBConfiguration.php');
            return $databaseConfiguration;
        }
        if ($this->enviromentConfiguration["Enviroment"] === "Production") {
            $databaseConfiguration = require ('../app/Config/DBConfig/ProdDBConfiguration.php');
            return $databaseConfiguration;
        }
    }

}