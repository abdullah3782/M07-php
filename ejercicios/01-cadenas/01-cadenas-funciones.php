
<?php
/* 

EJERCICIO 1:
Asigna a una variable una cadena y muestra por pantalla:
-longitud:
-cadena invertida:
-cuantas palabras tiene:
-cuantas 'a' contiene la Cadena:
-reemplaza las 'a' por 'A':

*/

$cadena = "Hola DAWW2";
$longitud = strlen($cadena);
echo "Longitud de la cadena: $longitud<br>";
echo strrev($cadena);
$countcadena = str_word_count($cadena);
echo "en esta cadena hay : $countcadena palabras <br>";
//strtolower para que tenga en cuenta las mayusculas y las minusculas
$contarA = substr_count (strtolower($cadena), 'a');
echo "Cantidad de 'a' en la cadena: $contarA<br>";

?>