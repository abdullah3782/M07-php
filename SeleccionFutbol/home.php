<?php

require __DIR__ . '/functions.php'; 

myHeader();
myMenu();


$paisEspana = "España";

$posicionesFutbol = ["Portero", "Defensa", "Centrocampista", "Delantero"];

$icono = [
    [ "Nombre"=> "Alejandro", "Nª Camiseta"=> "1", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 1, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]],
    [ "Nombre"=> "Ansu", "Nª Camiseta"=> "2", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 2, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Carvajal", "Nª Camiseta"=> "3", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 3, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "David", "Nª Camiseta"=> "4", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 4, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "David", "Nª Camiseta"=> "5", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 5, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Dabian", "Nª Camiseta"=> "6", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 6, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Fran", "Nª Camiseta"=> "7", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 7, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Gavi", "Nª Camiseta"=> "8", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 8, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Kepa", "Nª Camiseta"=> "9", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 9, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Laporte", "Nª Camiseta"=> "10", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 10, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Martin", "Nª Camiseta"=> "11", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 11, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Mikel", "Nª Camiseta"=> "12", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 12, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Mikey", "Nª Camiseta"=> "13", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 13, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Navas", "Nª Camiseta"=> "14", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 14, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Nico", "Nª Camiseta"=> "15", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 15, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Oihan", "Nª Camiseta"=> "16", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 16, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]] , 
    [ "Nombre"=> "Pau", "Nª Camiseta"=> "17", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 17, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Rodrigo", "Nª Camiseta"=> "18", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 18, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]] , 
    [ "Nombre"=> "Thumbnail", "Nª Camiseta"=> "19", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 19, "pais"=> $paisEspana, "posicion"=> $posicionesFutbol[rand(0, count($posicionesFutbol) - 1)]], 
    [ "Nombre"=> "Unai", "Nª Camiseta"=> "20", "goles"=> rand(0, 15), "numeroPartidos"=> rand(0, 15), "nombre_archivo"=> 20, "pais"=> $paisEspana, "posicion"=> "Portero"], 
];




foreach ($icono as $indice => $array) {
    echo '<div style="display:inline-block; margin:10px;">';
    echo '<img style="width:100px" src="./img/' . $array['nombre_archivo'] . '.png" alt="' . $array['nombre_archivo'] . '">';
    echo '<p>Nombre: ' . $array['Nombre'] . '</p>';
    echo '<p>Posicion: ' . $array['posicion'] . '</p>';
    echo '<p>Numero de camisa: ' . $array['Nª Camiseta'] . '</p>';
    echo '<p>Numero de partidos: ' . $array['numeroPartidos'] . '</p>';
    echo '<p>goles: ' . $array['goles'] . '</p>';
    echo '<p>Pais: ' . $array['pais'] . '</p>';
    echo '-----------------------<br>';
    echo '</div>';
}



?>


<?php
myFooter();
?>