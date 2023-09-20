<?php
declare (strict_types=1);


function random() {
    $dado = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];

    

$jugador1 = rand(0,count($dado)-1);

echo '<img src="'.$dado[$jugador1] . '">';

$jugador2 = rand(0,count($dado)-1);

echo '<img src="'.$dado[$jugador2] . '">';

if($jugador1>$jugador2){

    echo 'El ganador es el jugador 1';

}elseif ($jugador1<$jugador2){

    echo 'El ganador es el jugador 2';
} else {

    echo'Empate';

}


}


function main(): void {

    //local vars
    print random();
    
}

main();
?>

