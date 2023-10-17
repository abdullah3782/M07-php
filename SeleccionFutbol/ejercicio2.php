<?php
require __DIR__ . '/functions.php'; 
myHeader();
myMenu();

$letter_template = <<<TEMPLATE
Dear {{name}},
Felicidades, ¡Has sido seleccionado para formar parte del equipo nacional de fútbol de España! ¡Te deseo lo mejor!
TEMPLATE;

// Definino el array de jugadores
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

echo "<pre>"; // Inicio la etiqueta <pre> para conservar el formato

function make_letters($letter_template, $name_array) {
    $letters = array();
    foreach ($name_array as $name) {
        $letter = strtr($letter_template, array('{{name}}' => $name));
        $letters[$name] = $letter;
    }
    return $letters;
}

// Generar las cartas y mostrarlas por pantalla
$letters = make_letters($letter_template, $players);
foreach ($letters as $name => $letter) {
    echo "Carta para $name:<br>";
    echo htmlspecialchars($letter); // Utilizo htmlspecialchars para evitar problemas con HTML
    echo "<br><br>";
}

echo "</pre>"; // Cierro la etiqueta <pre>

myFooter();
?>
