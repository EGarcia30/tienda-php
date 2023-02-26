<?php

class Router{

    //Indicar si la ruta ha sido manejada con exito
    private $handler = false;

    function __construct(){

    }

    //Manejador GET routes/requests

    public function get($route, $view){
        $uri = $_SERVER['REQUEST_URI'];
        if($uri === $route){
            return include_once (view . $view);
        }
    }

    public function getViews($route, $view){
        $uri = $_SERVER['REQUEST_URI'];
        if($uri === $route){
            return include_once (views . $view);
        }
    }
}


?>