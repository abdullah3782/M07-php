<?php
require __DIR__ . '/functions.php';

myHeader();
myMenuLoged();

// Definir la variable $archivoVotos
$archivoVotos = 'votos.txt';

// Procesar el voto
if (isset($_POST['votar'])) {
    $voto = $_POST['frase'];

    // Guarda el voto en un archivo o base de datos
    file_put_contents($archivoVotos, $voto . PHP_EOL, FILE_APPEND);

    echo "¡Voto registrado!";
}

// Mostrar recuento de votos para cada frase
$contenidoVotos = file_get_contents($archivoVotos);

if (!empty($contenidoVotos)) {
    $votos = array_filter(array_map('trim', explode("\n", $contenidoVotos)));

    // Obtener frases originales
    $archivoFrases = 'frases.txt';
    $contenidoFrases = file_get_contents($archivoFrases);
    $frases = array_filter(array_map('trim', explode("\n", $contenidoFrases)));

    echo "<br><br>Recuento de votos:<br>";

    // Mostrar recuento de votos para cada frase
    foreach ($frases as $frase) {
        $cantidad = count(array_keys($votos, $frase));
        echo "\"" . $frase . "\": " . $cantidad . " votos<br>";
    }
}

myFooter();
?>
