<?php
$folder = 'cartasex4/';

$letter_template = file_get_contents('index.view.html');

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



foreach ($players as $name) {
    $letter = strtr($letter_template, array('{{name}}' => $name));

    // Generar el nombre del archivo
    $filename = $folder . $name . '.html';

    // Guardar la carta en un archivo
    file_put_contents($filename, $letter);
}

echo "Todas las cartas han sido generadas y guardadas .";
?>
