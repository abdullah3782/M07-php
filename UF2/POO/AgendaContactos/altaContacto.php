<?php 
const NAME_REQUIRED = 'Please enter your name';
const APELLIDO_REQUIRED = 'Please enter your surname';
const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';

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

$apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
$inputs['apellido'] = $apellido;

if ($apellido) {
    $apellido = trim($apellido);
    if ($apellido === '') {
        $errors['apellido'] = APELLIDO_REQUIRED;
    }
} else {
    $errors['apellido'] = APELLIDO_REQUIRED;
}


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;

if ($email) {

    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $errors['email'] = EMAIL_INVALID;
    } else {

        $registeredUsers = file('registered_users.txt', FILE_IGNORE_NEW_LINES);
        foreach ($registeredUsers as $user) {
            $userData = explode(', ', str_replace(['Name: ', 'apellido', 'Email: '], '', $user));
            if (isset($userData[1]) && $email === $userData[1]) {
                $errors['email'] = EMAIL_ALREADY_REGISTERED;
                break;
            }
        }
    }
} else {
    $errors['email'] = EMAIL_REQUIRED;
}




if (empty($errors)) {
    // No hay errores, puedes guardar los datos en el archivo

    $userData = "Name: $name, apellido: $apellido, Email: $email" . PHP_EOL;

    // Abre el archivo en modo de escritura y agrega el nuevo usuario al final
    $file = fopen('registered_users.txt', 'a');

    if ($file) {
        fwrite($file, $userData);
        fclose($file);



        // Puedes limpiar los datos del formulario si lo deseas
        $inputs = [];
    } else {
        // Error al abrir el archivo
        echo 'Error al guardar los datos. Inténtalo de nuevo más tarde.';
    }
}







?>