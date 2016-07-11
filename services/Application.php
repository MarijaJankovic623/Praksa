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
        $this->container->setSetter('IndexCtrl',function($ioc){
           return new IndexCtrl();
        });
        $this->container->setSetter('Router',function($ioc){
           return new Router($ioc); 
        });

    }


    public function start(){
        try {
            $req = new Request($_SERVER['REQUEST_URI']);

            $router = $this->container->getInstance('Router');
            $router->route($req);

        } catch( Response $exception){

        }

    }

}