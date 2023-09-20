<?php
/*crear uan pagina que muestre un numero entero aleatorio entre 1 y 100
otro numero float entre 0 y 5 */


$numero_aleatorio = rand(1,100);
echo($numero_aleatorio) . "<br>";


$numeroFloat = rand(0, 500) / 100;
echo($numeroFloat);


?>