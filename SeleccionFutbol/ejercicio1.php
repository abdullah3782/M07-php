<?php
require __DIR__ . '/functions.php'; 
myHeader();
myMenu();

$letter_template = <<<TEMPLATE
Dear {{name}},
Congratulations! You have been selected to be part of the Spanish national football team.
I wish you the best!
TEMPLATE;

// Defino el array de jugadores
$players = array( 
    "Alejandro",
    "Ansu",
    "Carvajal",
    "David",
    "Jose",
    "Fabian",
    "Fran",
    "Gavi",
    "Kepa",
    "Laporte",
    "Martin",
    "Mikel",
    "Mikey",
    "Navas",
    "Nico",
    "Oihan",
    "Pau",
    "Rodrigo",
    "Thumbnail",
    "Unai"
);

// Carpeta donde se guardarán los archivos porque si no me lo soltará con todos los archivos php
$folder = 'mensajesTxt/';

function make_letters($letter_template, $name_array) {
    $letters = array();
    foreach ($name_array as $name) {
        $letter = strtr($letter_template, array('{{name}}' => $name));
        $letters[$name] = $letter;
    }
    return $letters;
}

// Genero las cartas
$letters = make_letters($letter_template, $players);

// Guardo las cartas en archivos
foreach ($letters as $name => $letter) {
    $filename = $folder . $name . '.txt';
    file_put_contents($filename, $letter);
    echo "Carta para $name generada y guardada en $filename.<br>";
}

myFooter();
?>
