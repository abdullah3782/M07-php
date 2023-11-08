<?php
require __DIR__ . '/functions.php';

myHeader();
myMenuLoged();

$archivo = 'frases.txt';

if (isset($_POST['agregarFrase'])) {
    $nuevaFrase = $_POST['nuevaFrase'];
    if (!empty($nuevaFrase)) {
        // Abre el archivo en modo "agregar" y coloca la nueva frase al final
        file_put_contents($archivo, $nuevaFrase . PHP_EOL, FILE_APPEND);
    }
}

$contenido = file_get_contents($archivo);

$frases = explode("\n", $contenido);

foreach ($frases as $frase) {
    echo "<div>" . $frase . "</div>
        <form method='post' action='recuentodevotos.php'>
            <input type='hidden' name='frase' value='" . htmlspecialchars($frase) . "'>
            <input type='submit' name='votar' value='Votar'>
        </form><br>";
}

?>


<?php
myFooter();
?>