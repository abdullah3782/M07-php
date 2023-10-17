<?php
require __DIR__ . '/functions.php'; 
myHeader();
myMenu();

// Leo la plantilla de la carta desde el archivo
$letter_template = file_get_contents('index.view.html');

// Definir el array de jugadores
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

echo "<div id='carta-container'>";

function make_letters($letter_template, $name_array) {
    $letters = array();
    foreach ($name_array as $name) {
        $letter = strtr($letter_template, array('{{carta}}' => "Carta para $name:<br>" . htmlspecialchars("Hola $name,\n
        ¡Has sido seleccionado para formar parte del equipo nacional de fútbol de España! \n¡Te deseo lo mejor!\n\n")));
        $letters[$name] = $letter;
    }
    return $letters;
}

// Generao las cartas y mostrarlas por pantalla
$letters = make_letters($letter_template, $players);
foreach ($letters as $name => $letter) {
    echo $letter;
    echo "<br><br>";
}

echo "</div>";

myFooter();
?>
