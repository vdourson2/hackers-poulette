<?php 

//For testing :
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$error = [];
$genders = ['male','female','other'];
$countries = ['belgium','france','netherlands','germany','luxemburg'];


if (isset($_POST['submit']) AND (empty($_POST['age']))) {
    //The input "age" is for the honeypot (to avoid spam) 

    //-------SANITIZE AND VALIDATE NAME------------------ 
    //If the name is completed
    if (isset($_POST['name'])){
        $name = htmlspecialchars($_POST['name']);
        //The sanitized name is too short or too long
        if (strlen($name)<2 OR strlen($name)>20){
            $error['name'] = 'Invalid name. Please enter a name with a length between 2 and and 20 caracters.';
        }
    //If the name is not completed
    } else {
        $error['name']= 'You must complete your name';
    }

    //-------SANITIZE AND VALIDATE LASTNAME------------------
    //If the lastname is completed
    if (isset($_POST['lastname'])){
        $lastname = htmlspecialchars($_POST['lastname']);
        //The sanitized lastname is too short or too long
        if (strlen($lastname)<2 OR strlen($lastname)>20){
            $error['lastname'] = 'Invalid lastname. Please enter a lastname with a length between 2 and and 20 caracters.';
        }
    //If the lastname is not completed
    } else {
        $error['lastname']= 'You must complete your lastname';
    }

    //-------SANITIZE AND VALIDATE GENDER------------------
    //If the gender is completed
    if (isset($_POST['gender'])){
        $gender = $_POST['gender'];
        //Check if the gender belongs to the array of genders
        $genderOk = false;
        foreach ($genders as $g){
            if ($gender == $g) {
                $genderOk = true;
            };
        }
        //If the gender doesn't belong to the array of genders
        if ($genderOk == false) {
            $gender = NULL;
            $error['gender'] = 'Invalid gender. Please enter a valid gender';
        }
    //If the gender is not completed
    } else {
        $error['gender']= 'You must complete your gender';
    }

    //-------SANITIZE AND VALIDATE EMAIL------------------
    //If the email is completed
    if (isset($_POST['email'])){
        $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        //The sanitized email is not valid
        if (filter_var($email,FILTER_VALIDATE_EMAIL) == false){
            $error['email'] = 'Invalid email. Pease enter a valid email.';
        }
    //The email is not completed
    } else {
        $error['email'] = 'You must complete your email';
    }

    //-------SANITIZE AND VALIDATE COUNTRY------------------
    //If the country is completed
    if (isset($_POST['country'])){
        $country = $_POST['country'];
        //Check if the country belongs to the array of countrys
        $countryOk = false;
        foreach ($countries as $c){
            if ($country == $c) {
                $countryOk = true;
            };
        }
        //If the country doesn't belong to the array of countrys
        if ($countryOk == false) {
            $country = NULL;
            $error['country'] = 'Invalid country. Please enter a valid country';
        }
    //If the country is not completed
    } else {
        $error['country']= 'You must complete your country';
    }


    //-------SANITIZE AND VALIDATE MESSAGE------------------
    //If the message is completed
    if (isset($_POST['message'])){
        $message = htmlspecialchars($_POST['message']);
        //The sanitized message is too long
        if (strlen($message)>500){
            $error['message'] = 'Your message is too long. Please reduce your message (max 500 caracters).';
        }
    //If the message is not completed
    } else {
        $error['message']= 'You must complete your message';
    }

    //---------EXECUTE---------------
    //If there is no error
    if (isset($error) AND empty($error)){
        require 'mailing.php';
    }
}

//For testing :
// echo '<pre>';
// print_r($error);
// echo '</pre>';

require 'index.view.php';