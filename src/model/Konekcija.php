<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 06/07/2016
 * Time: 13:14
 */
class  Konekcija {

    public static function get() {
        $config = $GLOBALS["config"];

        $params =  $config['db'][DATABASE];

        $conn = new mysqli($params['servername'], $params['username'], $params['password'], $params['database']);

        if ($conn->connect_error != NULL) {
            exit();
        }

        return $conn;
    }


}