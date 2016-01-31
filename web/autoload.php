<?php
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    
    static function autoload($class){
        require 'class/' . $class . '.php';
    }

}