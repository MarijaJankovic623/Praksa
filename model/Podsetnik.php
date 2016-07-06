<?php

/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 06/07/2016
 * Time: 14:07
 */
require "C:\wamp\www\Praksa\PHPMailer\PHPMailerAutoload.php";

class Podsetnik
{
    public function posalji($email,$text){

        ini_set("SMTP","smtp.gmail.com");
        ini_set('smtp_port',587);
        ini_set('sendmail_from',"marko.r.kastratovic@gmail.com");
        ini_set('smtp_port',587);

        mail($email,"Reminder",$text);
    }



function smtpmailer($to, $from, $from_name, $subject, $body) {
    global $error;
    $mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = "marko.r.kastratovic@gmail.com";
    $mail->Password = "jetresa6";
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo;
        return false;
    } else {
        $error = 'Message sent!';
        return true;
    }
}
}
$p = new Podsetnik();
//$p->posalji("marko.r.kastratovic@gmail.com","Poruka");
$p->smtpmailer("marko.r.kastratovic@gmail.com","marko.r.kastratovic@gmail.com","Pera","Naslov","telo");
var_dump($error);