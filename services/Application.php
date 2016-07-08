<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 08/07/2016
 * Time: 14:37
 */
class Application
{
    public function start(){
        try {

            Router::route(new Request());

        } catch( Response $exception){

        }

    }

}