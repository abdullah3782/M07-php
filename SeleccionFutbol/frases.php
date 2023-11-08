<?php

require __DIR__ . '/functions.php';

myHeader();
myMenuLoged();

$contenido = file_get_contents('frases.txt');

$frases = explode("\n", $contenido);

foreach ($frases as $frase) {
    echo $frase . "<br>";
}

?>

<?php
myFooter();

?>
