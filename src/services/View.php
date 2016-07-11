<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 08/07/2016
 * Time: 11:56
 */
class View
{
    protected $file;
    protected $path;

    function __construct($file,$path = '../src/view'){
        $this->path = $path;
        $this ->file = $file;
    }

    function render (Array $data){
        extract($data);

        ob_start();
        include( $this->path.'/'.$this->file);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}