<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 06/07/2016
 * Time: 14:07
 */
//require "C:\wamp\www\Praksa\PHPMailer\PHPMailerAutoload.php";

class Podsetnik
{
    public function dohvati_sve_podsetnike(){
        $conn = Konekcija::get();

        $stmt = $conn->stmt_init();
        $stmt->prepare("SELECT * FROM podsetnik ");
       // $stmt->bind_param("ss", $kime, $lozinka);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    

}
