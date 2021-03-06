<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 07/07/2016
 * Time: 10:12
 */


class Router
{
    private $ioc;

    public function __construct($ioc)
    {
        $this->ioc = $ioc;

    }

    public  function route(Request $request){
        
        $controller = $request->getController();
        $method = $request->getMethod();
        $args = $request->getArgs();


        $controllerFile = $_SERVER['DOCUMENT_ROOT'] . '/Praksa/src/controllers/' . $controller . '.php';

        if(is_readable($controllerFile)){
            require_once $controllerFile;

            $controller = $this->ioc->getInstance($controller);


            if(!empty($args)){
                call_user_func_array(array($controller,$method),$args);
            }else{
                call_user_func(array($controller,$method));
            }
            return;
        }

        throw new Exception('404 - '.$request->getController().'--Controller not found');
    }

}