<?php

/**
 * Created by PhpStorm.
 * User: Marija
 * Date: 6.7.2016.
 * Time: 11:15
 */
class IndexCtrl
{

    private $model_korisnik;
    private $model_podsetnik;
    private $container;
    private $security;



    function __construct($container)
    {
        
        $this->container = $container;
        $this->security = $container->getInstance('Security');
        $this->model_korisnik = new Korisnik();
        $this->model_podsetnik = new Podsetnik();

    }

    public function index()
    {
        //include("view/index.php");
        $view = new View('index.php');
        echo $view->render(Array());
    }

    public function login()
    {
        $poruka = "";


        if (isset($_POST['logovanjeButton'])) {


            $username = $_POST['korisnickoime'];
            $lozinka = $_POST['lozinka'];

            $userID = $this->model_korisnik->login($username, $lozinka);



            if ( $userID != null) {

                $this->security->loginUser($userID);
                $this->prelistavanje();
            }
            else {
                $poruka = "Pogresno ste uneli korisnicko ime ili sifru.";
                //include("view/index.php");*/

                $view = new View('index.php');
                echo $view->render(Array('poruka' => $poruka));
            }

        } else {
            //include("view/index.php");
            $view = new View('index.php');
            echo $view->render(Array());
        }

    }

    public function logout()
    {


        $this->security->logoutUser();
        //include("view/index.php");
        $view = new View('index.php');
        echo $view->render(Array());
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
               // include("view/index.php");

                $view = new View('index.php');
                echo $view->render(Array('poruka' => $poruka));

            } else {
                $poruka = "Vec postoji korisnik sa unetim imenom.";
                //include("view/registracija.php");
                $view = new View('registracija.php');
                echo $view->render(Array('poruka' => $poruka));
            }
        } else {
            // include("view/registracija.php");
            $view = new View('registracija.php');
            echo $view->render(Array());
        }
    }

    public function prelistavanje()
    {
        $this->sessionCheck();

        $podsetnici = $this->model_podsetnik->dohvati_sve_podsetnike($this->security->getUserId());

        //include("view/pregled_svih_podsetnika.php");
        $view = new View('pregled_svih_podsetnika.php');
        echo $view->render(Array('podsetnici'=>$podsetnici));


    }

    public function dodavanje()
    {

        if (isset($_POST['dodajButton'])) {

            if (isset($_POST['PON'])) $switch['ponedeljak'] = 1;
            else $switch['ponedeljak'] = 0;

            if (isset($_POST['UTO'])) $switch['utorak'] = 1;
            else $switch['utorak'] = 0;


            if (isset($_POST['SRE'])) $switch['sreda'] = 1;
            else $switch['sreda'] = 0;

            if (isset($_POST['CET'])) $switch['cetvrtak'] = 1;
            else $switch['cetvrtak'] = 0;

            if (isset($_POST['PET'])) $switch['petak'] = 1;
            else $switch['petak'] = 0;

            if (isset($_POST['SUB'])) $switch['subota'] = 1;
            else $switch['subota'] = 0;

            if (isset($_POST['NED'])) $switch['nedelja'] = 1;
            else $switch['nedelja'] = 0;


            if ($_POST['sati'] < 10) $_POST['sati'] = "0" . $_POST['sati'];
            if ($_POST['minuti'] < 10) $_POST['minuti'] = "0" . $_POST['minuti'];

            $podsetnik = array(

                'id_korisnik' => $this->security->getUserId(),
                'naziv' => $_POST['naziv'],
                'opis' => $_POST['opis'],
                'vreme' => $_POST['sati'] . ":" . $_POST['minuti']
            );

            $this->model_podsetnik->kreiraj_novi($podsetnik, $switch);
            $this->prelistavanje();

        } else{
            //include("view/dodaj_novi.php");
            $view = new View('dodaj_novi.php');
            echo $view->render(Array());


        }
    }


    public function brisanje($idpodsetnik)
    {


        $this->sessionCheck();

        $podsetnici = $this->model_podsetnik->obrisi_podsetnik($idpodsetnik);

        $this->prelistavanje();


    }


    private function sessionCheck()
    {
        if (!$this->security->checkUser()) {
            $poruka = "Sram vas bilo.";
           // include("view/index.php");
            $view = new View('index.php');
            echo $view->render(Array());
            exit();
        }


    }


}
