<?php

namespace Tutoriel;

/**
 * Class Autoloader
 * @package Tutoriel
 */
class Autoloader
{
    /**
     * Enregistre notre autoloader
     */
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    
    /**
     * Inclue le fichier correspondant à notre classe
     * @param string $class //le nom de la classe à charger
     */
    static function autoload($class)
    {
        if(strpos($class, __NAMESPACE__.'\\') === 0)//Si notre namespace n'est pas à la position 0, on sort de la fonction car on ne sort que notre namaspace à nous et on ne declenche pas l'autoloading comme ce n'est pas notre classe
        {
            $class = str_replace(__NAMESPACE__.'\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require 'classes/'.$class.'.php';
        }
    }
}