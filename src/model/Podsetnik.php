<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 06/07/2016
 * Time: 14:07
 */

class Podsetnik
{
    public function dohvati_sve_podsetnike($idkorisnik)
    {
        $conn = Konekcija::get();

        $stmt = $conn->stmt_init();
        $stmt->prepare("SELECT * FROM podsetnik WHERE id_korisnik = ?");
        $stmt->bind_param("i", $idkorisnik);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }


    public function kreiraj_novi($podsetnik, $period)
    {
        $conn = Konekcija::get();

        $stmt = $conn->stmt_init();
        $stmt->prepare("INSERT INTO podsetnik(id_korisnik, naziv, opis, vreme, ponedeljak, utorak, sreda, cetvrtak, petak, subota, nedelja) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("isssiiiiiii", $podsetnik['id_korisnik'], $podsetnik['naziv'], $podsetnik['opis'], $podsetnik['vreme'], $period['ponedeljak'], $period['utorak'], $period['sreda'], $period['cetvrtak'], $period['petak'], $period['subota'], $period['nedelja']);
        return $stmt->execute();


    }


    public function obrisi_podsetnik($idpodsetnik){

        $conn = Konekcija::get();

        $stmt = $conn->stmt_init();
        $stmt->prepare(" DELETE FROM podsetnik WHERE id_podsetnik= ?");
        $stmt->bind_param("i",$idpodsetnik);
        return $stmt->execute();


    }
}
