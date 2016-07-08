<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 08/07/2016
 * Time: 14:37
 */
class Application
{
    private $container;

    public function __construct()
    {
        $this->container = new InversionOfControl();
        $this->container->setSetter('IndexCtrl',function($con){
           return new IndexCtrl();
        });

    }


    public function start(){
        try {
            $req = new Request($_SERVER['REQUEST_URI']);

            Router::route($req,$this->container);

        } catch( Response $exception){

        }

    }

}