<?php 

echo '<pre>';
print_r($_POST);
echo '</pre>';

$error_email = null;


if (isset($_POST['submit'])) {
    //If the email is completed
    if (isset($_POST['email'])){
        $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        echo filter_var($email,FILTER_VALIDATE_EMAIL);
        //The sanitized email is valid
        if (filter_var($email,FILTER_VALIDATE_EMAIL)){
            require 'mailing.php';
            //header('location:php/checkout.php');
        }
        //The sanitized email is not valid 
        else {
            $error_email = 'Your email is not valid'; 
        }
    //The email is not completed
    } else {
        $error_email = 'You must complete your email';
    }
}

echo $error_email;

require 'index.view.php';