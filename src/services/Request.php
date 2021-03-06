<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 07/07/2016
 * Time: 10:14
 */

class Request
{
    private $_controller;

    private $_method;

    private $_args;

    public function __construct($path){


        $parts = explode('index.php',$path);


        $parts = explode('/',$parts[1]);

        array_shift($parts);


        $this->_controller = (($c = array_shift($parts))? $c: 'Index').'Ctrl';
        $this->_method = ($c = array_shift($parts))? $c: 'index';

        $this->_args = (isset($parts[0])) ? $parts : array();

        $this->setGlobal();

    }

    private function setGlobal(){

        $myPath = "http://".$_SERVER['SERVER_NAME'].'/Praksa/';

        define("MY_PATH",$myPath);
    }

    public function getController(){

        return $this->_controller;

    }
    public function getMethod(){
        $parts = explode('?',$this->_method);
        $this->_method = array_shift($parts);
        return $this->_method;

    }
    public function getArgs(){

        return $this->_args;
    }

}