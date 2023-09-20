<?php

$dado = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];

$i = rand(0,count($dado)-1);

echo '<img src="'.$dado[$i] . '">';

?>
