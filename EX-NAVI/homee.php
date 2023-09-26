<?php

require_once './0901-functions-structure.php';

function jugador1() {
    $dado = ['campana.png','chucheria.png','copo.png','cosasverde.png','galletas.png','gorro.png','las.png','regalo.png','val.png'];
    
    // Iterar sobre el array $dado y mostrar cada imagen en una etiqueta <img>
    foreach ($dado as $imagen) {
        echo '<img src="' . $imagen . '">';
    }
}

function main(): void {
    jugador1();
}

myHeader();
myMenu();

main();
myFooter();
?>
