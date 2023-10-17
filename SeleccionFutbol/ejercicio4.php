<?php
$folder = 'cartasex4/';

// Leer la plantilla de carta desde el archivo
$letter_template = file_get_contents('index.view.html');

// Definir un array de jugadores (por ejemplo)
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
    // Reemplazar {{name}} en la plantilla con el nombre actual
    $letter = strtr($letter_template, array('{{name}}' => $name));

    // Generar el nombre del archivo
    $filename = $folder . $name . '.html';

    // Guardar la carta en un archivo
    file_put_contents($filename, $letter);
}

echo "Todas las cartas han sido generadas y guardadas .";
?>
