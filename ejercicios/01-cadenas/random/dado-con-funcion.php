<?php
declare (strict_types=1);


function jugador1() {
    $dado = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];

$i = rand(0,count($dado)-1);
print '<img src="'.$dado[$i] . '">';
return $dado[$i];

}

function jugador2() {
    $dado2 = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];

$i = rand(0,count($dado2)-1);

print '<img src="'.$dado2[$i] . '">';
return $dado2[$i];

}



function main(): void {

    $dado1 = jugador1();
    $dado2 = jugador2();
 if ($dado1 > $dado2) {
    print("Ha ganado el jugador 1");
 } elseif ($dado1 < $dado2) {
    print("Ha ganado el jugador 2");
 }else {
    print("Empate");
 }
 

}

main();
?>