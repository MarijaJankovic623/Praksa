<?php
/**
 * Created by PhpStorm.
 * User: Marija
 * Date: 6.7.2016.
 * Time: 11:15
 */
include "model/Korisnik.php";
include "model/Podsetnik.php";

class IndexCtrl
{

    private $model_korisnik;
    private $model_podsetnik;


    function __construct()
    {

        $this->model_korisnik = new Korisnik();
        $this->model_podsetnik = new Podsetnik();

    }

    public function index()
    {
        include("view/index.php");
    }

    public function login()
    {
        $poruka = "";
        session_start();


        if (isset($_POST['logovanjeButton'])) {

            $username = $_POST['korisnickoime'];
            $lozinka = $_POST['lozinka'];

            if ($_SESSION["idkorisnik"] = $this->model_korisnik->login($username, $lozinka))
                $this->prelistavanje();
            else {
                $poruka = "Pogresno ste uneli korisnicko ime ili sifru.";
                include("view/index.php");
            }

        } else {
            include("view/index.php");
        }

    }

    public function logout()
    {
        session_start();

        session_destroy();
        include("view/index.php");
    }


    public function registracija()
    {
        $poruka = "";
        if (isset($_POST['registracijaButton'])) {
            $username = $_POST['korisnickoime'];
            $lozinka = $_POST['lozinka'];
            $email = $_POST['email'];

            if ($this->model_korisnik->registracija($username, $lozinka, $email)) {
                $poruka = "Uspesno ste se registrovali.";
                include("view/index.php");
            } else {
                $poruka = "Vec postoji korisnik sa unetim imenom.";
                include("view/registracija.php");
            }
        } else
            include("view/registracija.php");

    }

    public function prelistavanje()
    {
        $this->sessionCheck();

        $podsetnici = $this->model_podsetnik->dohvati_sve_podsetnike();

        include("view/pregled_svih_podsetnika.php");


    }

    public function dodavanje()
    {


    }

    public function izmena()
    {


    }

    private function sessionCheck(){
        if(!isset($_SESSION["idkorisnik"])){
            $poruka = "Sram vas bilo.";
            include("view/index.php");
            exit();
        }


    }


}
