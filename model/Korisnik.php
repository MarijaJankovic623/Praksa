<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 06/07/2016
 * Time: 13:09
 */

include "Konekcija.php";

class Korisnik
{

    public  function login($kime, $lozinka){
        $conn = Konekcija::get();

        $stmt = $conn->stmt_init();
        $stmt->prepare("SELECT * FROM korisnik WHERE korisnicko_ime = ? AND lozinka = ?");
        $stmt->bind_param("ss", $kime, $lozinka);
        $stmt->execute();

        $korisnik = $stmt->get_result()->fetch_assoc();

        if (isset($korisnik['id_korisnik'])){
            return $korisnik['id_korisnik'];
        }

        return null;
    }

}


$k = new Korisnik();
var_dump( $k->login("marko","marko"));