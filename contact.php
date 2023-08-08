<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
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
        // Send the email
        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
}
// if(isset($_POST["send"])){
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // $mail = new PHPMailer(true );

//     // $mail->isSMTP();
//     // $mail->Host = 'smtp.gmail.com';
//     // $mail->SMTPAuth = true;
//     // $mail->Username =  'isaacr.ilao@gmail.com';
//     // $mail->Password ='wexanincnpqzmpqb';
//     // $mail->SMTPSecure = 'ssl';
//     // $mail->Port = 465;

//     // $mail->setFrom($_POST["email"]);
//     // $mail->addAddress('amasonlandsurveying@gmail.com');
//     // $mail->isHTML(true);

//     // $mail->Subject = $_POST["subject"];

//     // $body = "";
//     // $body .= "Sender Email: ". $_POST['email']. "\r\n <br>";
//     // $body .= "Name: ". $_POST['name']. "\r\n <br>";
//     // $body .= "Message: ". $_POST['message']. "\r\n";


//     // $mail->Body = $body;





//     // echo "Your message was sent Succefully!";

//     // $mail->send();


// //     if($mail->send()){
// //         var_dump($_POST) ;
// //         echo
// //         "
// //         <script>
// //         alert('Sent Successfuly');
// //         </script>
// //         ";
// //     }


// //     echo 
// //     "
// //     <script>
// //     alert('Sent Successfuly');
// //     document.location.href = 'index.php'  
// //     ";
// // }else {
// //     var_dump($_POST) ;
// }



?>