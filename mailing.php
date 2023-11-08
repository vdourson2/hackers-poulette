<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'localhost';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = false;                                   //Enable SMTP authentication
    $mail->Port       = 1025;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL), "{$_POST['name']} {$_POST['lastname']}");     //Add a recipient

    //Content
    $mail->Subject = 'Hackers Poulette question';
    $mail->Body = "Subject : {$_POST['subject']}\n";
    $mail->Body .= "Message : {$_POST['message']}\n";
    $mail->send();
    $checkout = "Thank you for your message. We will respond as soon as possible";
} catch (Exception $e) {
    $checkout = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}