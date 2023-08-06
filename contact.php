<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// if(isset($_POST["send"])){
    $mail = new PHPMailer(true );

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username =  'isaacr.ilao@gmail.com';
    $mail->Password ='wexanincnpqzmpqb';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST["email"]);
    $mail->addAddress('amasonlandsurveying@gmail.com');
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];

    $body = "";
    $body .= "Sender Email: ". $_POST['email']. "\r\n <br>";
    $body .= "Name: ". $_POST['name']. "\r\n <br>";
    $body .= "Message: ". $_POST['message']. "\r\n";


    $mail->Body = $body;

    // $mail->send();


    if($mail->send()){
        var_dump($_POST) ;
        echo
        "
        <script>
        alert('Sent Successfuly');
        </script>
        ";
    }


    // echo 
    // "
    // <script>
    // alert('Sent Successfuly');
    // document.location.href = 'index.php'  
    // ";
// }else {
    // var_dump($_POST) ;
// }



?>