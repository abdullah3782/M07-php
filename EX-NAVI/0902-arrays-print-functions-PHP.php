<?php
require_once './data.php';

//Creamos una fuunciones para poder hacer un numero random
function randNumber(int $number): int{

return rand(1,$number);


}

//vamos a meter todas las imagenes en un array de manera aleatoria

function loadArray (int $long): array{

$array=[];

for ($i=0; $i < $long+1 ; $i++) { 
    $value = "img/".randNumber(12).".png";
    array_push($array, $value);
}

return $array;
}



function addArrayElements(array &$array, int $elementsToAdd): void{
    $i = randNumber(12);
    $value = "img/".$i.".png";
    for($i = 0; $i < $elementsToAdd; $i++){
        array_push($array, $value);
    }
}
//Vamos a borrar el primer elemento de la array

function deleteArrayElements (array &$array, int $elementsToDelete): void{

    for ($i=0; $i < $elementsToDelete ; $i++) { 
       
        array_shift($array);
    }
    
}
  
function printArray (mixed $array): void{

    echo "<pre>" . print_r($array, true) . "</pre>";
    
}
  
function showImages(array $array, int $width): void{
    foreach($array as $img){
        echo "<img src='".$img."' width=".$width."px>";
    }
}

function showImagesHome(array $array, int $width = 120): void{
    foreach($array as $img){
        echo '<div class="col-md-3">';
        echo "<img src='".$img."' width=".$width."px>";
        echo '</div>';
    }
}


?>