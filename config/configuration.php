<?php
/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 11/07/2016
 * Time: 14:12
 */



$config = array(
    'db'=> array(
        "default" => array(
            "servername" => "localhost",
            "username" => "root",
            "password" => "",
            "database" => "notifikacije"
        )
    )
);

$GLOBALS['config'] = $config;
define("DATABASE","default");

