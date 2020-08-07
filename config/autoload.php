<?php
class Autoloader
{


    static function register() // permet de charger toutes les classes sans avoir recours aux require once 
    {
     
        spl_autoload_register(array(__CLASS__, "autoload"));
    }

    static function autoload($class) // pour les namespaces permet de changer les backslash en forward slash
    {
        $class = str_replace("\\","/",$class);

        //echo $class;

        //avec utilisation des namespaces
        if(file_exists("../../".str_replace("\\","/",$class.".php"))){

            require_once ("../../".str_replace("\\","/",$class.".php"));
        }
        
        /*if(file_exists("src/model/".$class.".php"))
        {

            require_once "src/model/".$class.".php";

        
        } else if (file_exists("src/entities/".$class.".php"))
        {

            require_once "src/entities/".$class.".php";

        }
        
    }*/
    
    }

}

Autoloader::register();

?>