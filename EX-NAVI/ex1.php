<?php

require_once './0901-functions-structure.php';

function jugador1() {
    $dado = ['regalo.png','chucheria.png','gorro.png','las.png','ewq.png','campana.png','gar.png','galletas.png','cosaverde.png' ,'luces-de-navidad.png','dor.png'];
    
    array_shift($dado);

    array_push($dado, 'kanti.png');

    $i = rand(0, count($dado) - 1);
    
    
    for ($j = 0; $j < $i; $j++) {
        echo '<img src="' . $dado[$i] . '">';
    }
    
    return $dado[$i];
   

}





function main(): void {
    jugador1();
}

myHeader();
myMenu();

main();
myFooter();
?>
