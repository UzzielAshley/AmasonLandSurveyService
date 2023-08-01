<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true );

    $mail->isSMTP();
    $mail->Host = 'uashvaldez@gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username =  'uashvaldez@gmail.com';
    $mail->Password ='ngkttgxgjigbgdcg';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('uashvaldez@gmail.com');
    $mail->addAddress('$_POST["email"]');
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();


    // echo 
    // "
    // <script>
    // alert('Sent Successfuly');
    // document.location.href = 'index.php'  
    // ";
}



?>