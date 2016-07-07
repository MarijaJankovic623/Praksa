<?php
/**
 * Created by PhpStorm.
 * User: Marija
 * Date: 6.7.2016.
 * Time: 11:15
 */
include "model/Korisnik.php";

class IndexCtrl{

    private $model;

    function __construct(){

        $this->model = new Korisnik();

    }

    public function index(){
        include ("view/index.php");
    }

    public function login(){

        $username = $_POST['username'];
        $lozinka =  $_POST['lozinka'];

        if($this->model->login($username, $lozinka)) header("view/pregled_svih_podsetnika.php");


    }


    public function registracija(){
        include ("view/registracija.php");


    }


}
