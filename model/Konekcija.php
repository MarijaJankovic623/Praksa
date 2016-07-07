<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 06/07/2016
 * Time: 13:14
 */
class  Konekcija {

    public static function get() {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "notifikacije";


        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error != NULL) {
            exit();
        }

        return $conn;
    }


}