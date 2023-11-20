<?php

const NAME_REQUIRED = 'Please enter your name';
const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';
const DOB_REQUIRED = 'Please enter your date of birth';


$errors = [];
$inputs = [];

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$inputs['name'] = $name;

if ($name) {
    $name = trim($name);
    if ($name === '') {
        $errors['name'] = NAME_REQUIRED;
    }
} else {
    $errors['name'] = NAME_REQUIRED;
}

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;

if ($email) {
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $errors['email'] = EMAIL_INVALID;
    }
} else {
    $errors['email'] = EMAIL_REQUIRED;
}

$dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
$inputs['dob'] = $dob;

if ($dob) {
    $dobDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($dobDate)->y;

    if ($age < 18) {
        $errors['dob'] = "You must be at least 18 years old to register.";
    }
} else {
    $errors['dob'] = DOB_REQUIRED;
}

if (empty($errors)) {
    
    $userData = "Name: $name, Email: $email, Date of Birth: $dob" . PHP_EOL;
    
    $file = fopen('registered_users.txt', 'a');
    
    if ($file) {
        fwrite($file, $userData);
        fclose($file);
        
        $inputs = [];
    } else {
        echo 'Error al guardar los datos. Inténtalo de nuevo más tarde.';
    }
}

?>
