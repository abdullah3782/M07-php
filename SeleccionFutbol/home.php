<?php

require __DIR__ . '/functions.php'; 

myHeader();
myMenu();

$ciudades = [
"Pakistan",
"Tokyo",
"Paris",
"Rio de Janeiro",
"Sydney",
"Cairo",
"Toronto",
"Cape Town",
"Havana",
"Bangkok",
    
 
];

$icono = [
              
    [ "Nombre"=> "Alejandro","Nª Camiseta"=> "1", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10),  "nombre_archivo"=> 1, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"],
    [ "Nombre"=> "Ansu","Nª Camiseta"=> "2", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10),  "nombre_archivo"=> 2, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Carvajal", "Nª Camiseta"=> "3", "goles"=> rand(0,15),"numeroPartidos"=> rand(0,10),  "nombre_archivo"=> 3, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "David", "Nª Camiseta"=> "4", "goles"=> rand(0,15),"numeroPartidos"=> rand(0,10),  "nombre_archivo"=> 4, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "David", "Nª Camiseta"=> "5", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 5, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Dabian","Nª Camiseta"=> "6", "goles"=> rand(0,15),"numeroPartidos"=> rand(0,10),  "nombre_archivo"=> 6, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Fran","Nª Camiseta"=> "7", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 7, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Gavi","Nª Camiseta"=> "8", "goles"=> rand(0,15),"numeroPartidos"=> rand(0,10),  "nombre_archivo"=> 8, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Kepa","Nª Camiseta"=> "9", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 9, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Laporte","Nª Camiseta"=> "10", "goles"=> rand(0,15),"numeroPartidos"=> rand(0,10),  "nombre_archivo"=> 10, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Martin", "Nª Camiseta"=> "11", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 11, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Mikel","Nª Camiseta"=> "12", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 12, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "MikeY","Nª Camiseta"=> "13", "goles"=> rand(0,15),"numeroPartidos"=> rand(0,10),  "nombre_archivo"=> 13, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Navas", "Nª Camiseta"=> "14", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 14, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Nico", "Nª Camiseta"=> "15", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 15, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Oihan_sancet", "Nª Camiseta"=> "16", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 16, "ciudad"=>$ciudades[rand(0,9)],"posicion"=> "Portero" ], 
    [ "Nombre"=> "Pau","Nª Camiseta"=> "17", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 17, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Rodrigo","Nª Camiseta"=> "18", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 18, "ciudad"=>$ciudades[rand(0,9)],"posicion"=> "Portero" ], 
    [ "Nombre"=> "Thumbnail", "Nª Camiseta"=> "19", "goles"=> rand(0,15), "numeroPartidos"=> rand(0,10), "nombre_archivo"=> 19, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
    [ "Nombre"=> "Unai", "Nª Camiseta"=> "20", "goles"=> rand(0,15),"numeroPartidos"=> rand(0,10),  "nombre_archivo"=> 20, "ciudad"=>$ciudades[rand(0,9)] ,"posicion"=> "Portero"], 
   
];

foreach ($icono as $indice => $array) {
    echo '<div style="display:inline-block; margin:10px;">';
    echo '<img style="width:100px" src="./img/' . $array['nombre_archivo'] . '.png" alt="' . $array['nombre_archivo'] . '">';
    echo '<p>Nombre: ' . $array['Nombre'] . '</p>';
    echo '<p>Posicion: ' . $array['posicion'] . '</p>';
    echo '<p>Numero de camisa: ' . $array['Nª Camiseta'] . '</p>';
    echo '<p>Numero de partidos: ' . $array['numeroPartidos'] . '</p>';
    echo '<p>goles: ' . $array['goles'] . '</p>';
    echo '<p>Ciudad: ' . $array['ciudad'] . '</p>';
    echo '-----------------------<br>';
    echo '</div>';
}



?>


<?php
myFooter();
?>