<?php
/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 06/07/2016
 * Time: 12:07
 */


$url = $_SERVER['REQUEST_URI'];

$temp = explode('?',$url)[1];
$ctrl = explode('/',$temp)[0];
$mtd = explode('/',$temp)[1];




switch ($ctrl){
    case 'nesto' :
        echo "da";
        break;
    case 'nesto1' : 
        echo "da";
        break;
    case 'nesto2' :
        echo "da";
        break;
    case 'nesto3' :
        echo "da";
        break;
    case 'nesto4' :
        echo "da";
        break;
}


