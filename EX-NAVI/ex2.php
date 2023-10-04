<?php
require_once './0901-functions-structure.php';
require_once './0902-arrays-print-functions-PHP.php';
myHeader();
myMenu();

$ciudades = [
   "Valencia",
   "Barbate",
   "Salamanca",
   "Gijón",
   "Burgos",
   "Ronda",
   "Cartagena",
   "Pamplona",
   "Tenerife",
   "Granada",
];

$icono = [
              
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 1, "ciudad"=>$ciudades[rand(0,9)] ],
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 2, "ciudad"=>$ciudades[rand(0,9)] ], 
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 3, "ciudad"=>$ciudades[rand(0,9)] ], 
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 4, "ciudad"=>$ciudades[rand(0,9)] ], 
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 5, "ciudad"=>$ciudades[rand(0,9)] ], 
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 6, "ciudad"=>$ciudades[rand(0,9)] ], 
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 7, "ciudad"=>$ciudades[rand(0,9)] ], 
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 8, "ciudad"=>$ciudades[rand(0,9)] ], 
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 9, "ciudad"=>$ciudades[rand(0,9)] ], 
[ "tag_name"=> "#", "likes"=> rand(1,50),  "nombre_archivo"=> 10, "ciudad"=>$ciudades[rand(0,9)]], 
                   
];



echo '<div class="container">'; 

echo '<div class="row">'; 

foreach ($icono as $indice => $array) {
    echo '<div class="col">';
    echo '<img style="width:100px" src="./img/' . $array['nombre_archivo'] . '.png" alt="' . $array['nombre_archivo'] . '">';
    echo '<p>Tag Name: ' . $array['tag_name'] . '</p>';
    echo '<p>Likes: ' . $array['likes'] . '</p>';
    echo '<p>Ciudad: ' . $array['ciudad'] . '</p>';
    echo '</div>';
}

echo '</div>'; 
echo '</div>';




$array_par = [];
$array_impar = [];
separarParImpar($icono, $array_par, $array_impar);
pares($array_par);
impares($array_impar);
$mergedarray = union($array_par, $array_impar);
mostrar_array($mergedarray);

$IconosConMasLikes= IconosConMasLikes($icono);
$IconosConMenosLikes = IconosConMenosLikes($icono);
$IcononosAcendente = IcononosAscendente($icono);
$IcononosDescendente = IcononosDescendente($icono);


myFooter();

