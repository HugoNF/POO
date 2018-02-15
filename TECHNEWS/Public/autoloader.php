<?php


class Autoloader {
    # Fonction statique :   quand une fonction est statique on peut l'appeler sans instancier la classe . une fonction statique appartient
    # à la classe pas à l'objet instancier de ce fait quand on appelera la fonction statique on passera par la class,
    # les fonctions statiques ne peuvent appeler que des fonctions statiques. Par contre une fonction non statique à l'intérieur de celle ci.
    public static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    public static function autoload($class){
        # echo 'Autoload pour :';
        # print_r($class);
        # echo '<br>';
        require PATH_ROOT . '/' . $class .'.php';

    }

}