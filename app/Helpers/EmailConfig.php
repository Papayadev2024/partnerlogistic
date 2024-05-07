<?php

namespace App\Helpers;

use PHPMailer\PHPMailer\PHPMailer;

class EmailConfig
{
    static  function config(): PHPMailer
    {
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hola@mundoweb.pe';
        $mail->Password = 'rzhfwaxrddnppppr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        // $mail->Subject = '' . $name . ', '.$mensaje. '';
        $mail->Subject = 'asdasas';
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('info@decotab.com', 'Decotab');
        return $mail;
    }
}
