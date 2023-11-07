<?php 

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$error = [];


if (isset($_POST['submit'])) {
    //If the name is completed
    if (isset($_POST['name'])){
        $name = htmlspecialchars($_POST['name']);
        //The sanitized name is too short or too long
        if (strlen($name)<2 OR strlen($name)>20){
            $error['name'] = 'Invalid name. Please enter a name with length between 2 and and 20 caracters';
        }
    //If the name is not completed
    } else {
        $error['name']= 'You must complete your name';
    }
    //If the email is completed
    if (isset($_POST['email'])){
        $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        //The sanitized email is valid
        if (filter_var($email,FILTER_VALIDATE_EMAIL) == false){
            $error['email'] = 'Invalid email. Pease enter a valid email';
        }
        //The sanitized email is not valid 
        // else {
        //     $error_email = 'Your email is not valid'; 
        // }
    //The email is not completed
    } else {
        $error['email'] = 'You must complete your email';
    }
    if (isset($error) AND empty($error)){
        require 'mailing.php';
    }
}


// echo '<pre>';
// print_r($error);
// echo '</pre>';

require 'index.view.php';