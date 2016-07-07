<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 07/07/2016
 * Time: 12:05
 */



class Server
{
   public function run(){
       while(true){

           $this->check();

           sleep(60);
       }
   }

    private function getReminders(){
        $conn = new mysqli("localhost", "root", "", "notifikacije");

        $time = date('h:i');
        $day = date('w');

        var_dump($time);

        $day = 6;
        $time = "15:23";
        $upit = "";
        switch($day){
            case 1:
                $upit = "ponedeljak = 1";
                break;
            case 2:
                $upit = "utorak = 1";
                break;
            case 3:
                $upit = "sreda = 1";
                break;
            case 4:
                $upit = "cetvrtak = 1";
                break;
            case 5:
                $upit = "petak = 1";
                break;
            case 6:
                $upit = "subota = 1";
                break;
            case 0:
                $upit = "nedelja = 1";
                break;
        }
        $sql = "SELECT * FROM podsetnik WHERE ".$upit." AND vreme =\"".$time."\"";

        $reminiders = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        $conn->close();

        return $reminiders;

    }

    public function check(){
        $reminders = $this->getReminders();

        foreach ($reminders as $reminder ){
            $email = $this->getEmail($reminder['id_korisnik']);

            $this->sendEmail($email,$reminder['opis']);
        }

    }

    private function getEmail($id){
        $conn = new mysqli("localhost", "root", "", "notifikacije");

        $sql = "SELECT * FROM korisnik WHERE id_korisnik = ".$id;

        $email = $conn->query($sql)->fetch_all(MYSQLI_ASSOC)[0]['email'];

        $conn->close();

        return $email;

    }

    private function sendEmail($email,$text){
        mail($email,$text,"from:someone@hotmail.com");
    }
}


$s = new Server();

$s->run();