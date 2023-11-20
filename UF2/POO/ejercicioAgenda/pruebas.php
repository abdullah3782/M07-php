<?php

require 'agenda.php'; 
require 'alumno.php';
require 'profesor.php';
require 'personal.php';

$profesor = new Profesor('Carlos', 'Lopez', '1980-01-10', 'carlos@gmail.com', 50000, 'Matemáticas');
$personal = new Personal('Laura', 'Garcia', '1990-05-20', 'laura@gmail.com', 40000);

if ($profesor->getSalario() > $personal->getSalario()) {
    echo "El profesor gana más que el personal.";
} else {
    echo "El personal gana igual o más que el profesor.";
}

?>
