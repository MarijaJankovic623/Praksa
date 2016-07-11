<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 11/07/2016
 * Time: 13:09
 */
class Security
{
    public function __construct()
    {
        session_start();
    }

    public function loginUser($userId){
        $_SESSION['userId'] = $userId;
    }

    public function logoutUser(){
        session_destroy();
    }

    public function checkUser(){
        return isset($_SESSION['userId']);
    }

    
}