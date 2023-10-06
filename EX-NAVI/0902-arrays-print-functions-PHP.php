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



function separarParImpar(array &$icono, array &$array_par, array &$array_impar){
    
    foreach ($icono as $array) {
        
        if ($array['nombre_archivo'] % 2 == 0) {
            $array_par[] = $array;
        } else {
            $array_impar[] = $array;
        }
    }
    
}

function pares($array_par){
   
        echo '<h2>Los Pares</h2>';
        echo '<div class=row>';
            foreach ($array_par as $array) {
                echo '<div class="col">';
                echo '<img style="width:100px" src="./img/' . $array['nombre_archivo'] . '.png" alt="' . $array['nombre_archivo'] . '">';
                echo '<p>Tag Name: ' . $array['tag_name'] . $array['nombre_archivo'] . '</p>';
                echo '<p>Likes: ' . $array['likes'] . '</p>';
                echo '<p>Ciudad: ' . $array['ciudad'] . '</p>';
                echo '</div>';
            }
        echo '</div>';
    echo '</div>';
}

function impares($array_impar){

        echo '<h2>Los Imares</h2>';
        echo '<div class="row">';
            foreach ($array_impar as $indice => $array) {
                echo '<div class="col">';
                echo '<img style="width:100px" src="./img/' . $array['nombre_archivo'] . '.png" alt="' . $array['nombre_archivo'] . '">';
                echo '<p>Tag Name: ' . $array['tag_name'] . $array['nombre_archivo'] . '</p>';
                echo '<p>Likes: ' . $array['likes'] . '</p>';
                echo '<p>Ciudad: ' . $array['ciudad'] . '</p>';
                echo '</div>';
            }
        echo '</div>';
    echo '</div>';
}


function union($array_par, $array_impar){
    $merged_array = array_merge($array_par, $array_impar);
    return $merged_array;
}

function mostrar_array($array1){

    echo '<h2>Merge de pares e impares</h2>';
        echo '<div class="row">';
            foreach ($array1 as $array) {
                echo '<div class="col">';
                echo '<img style="width:100px" src="./img/' . $array['nombre_archivo'] . '.png" alt="' . $array['nombre_archivo'] . '">';
                echo '<p>Tag Name: ' . $array['tag_name'] . $array['nombre_archivo'] . '</p>';
                echo '<p>Likes: ' . $array['likes'] . '</p>';
                echo '<p>Ciudad: ' . $array['ciudad'] . '</p>';
                echo '</div>';
            }
        echo '</div>';
    echo '</div>';
}



function IconosConMasLikes($iconos) {
    $maxLikes = 0;
    $iconosConMasLikes = [];

    foreach ($iconos as $icono) {
        $likes = $icono['likes'];

        if ($likes > $maxLikes) {
            $maxLikes = $likes;
            $iconosConMasLikes = [$icono];
        } elseif ($likes == $maxLikes) {
            $iconosConMasLikes[] = $icono;
        }
    }

    echo "<h3> Con más Likes:</h3><br>";
    echo '<div class="row">';
    foreach ($iconosConMasLikes as $icono) {
        echo '<div class="col">';
        echo '<img style="width:100px" src="img/' . $icono['nombre_archivo'] . '.png" alt="' . $icono['nombre_archivo'] . '">';
        echo '<p>Tag Name: ' . $icono['tag_name'] . '</p>';
        echo '<p>Likes: ' . $icono['likes'] . '</p>';
        echo '<p>Ciudad: ' . $icono['ciudad'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
}
//------------------------------------------------------------------------------------------------------------

function IconosConMenosLikes($iconos) {
    $minLikes = PHP_INT_MAX;
    $iconosConMenosLikes = [];

    foreach ($iconos as $icono) {
        $likes = $icono['likes'];

        if ($likes < $minLikes) {
            $minLikes = $likes;
            $iconosConMenosLikes = [$icono];
        } elseif ($likes == $minLikes) {
            $iconosConMenosLikes[] = $icono;
        }
    }

    echo "<h3> Con menos Likes:</h3><br>";
    echo '<div class="row">';
    foreach ($iconosConMenosLikes as $icono) {
        echo '<div class="col">';
        echo '<img style="width:100px" src="img/' . $icono['nombre_archivo'] . '.png" alt="' . $icono['nombre_archivo'] . '">';
        echo '<p>Tag Name: ' . $icono['tag_name'] . '</p>';
        echo '<p>Likes: ' . $icono['likes'] . '</p>';
        echo '<p>Ciudad: ' . $icono['ciudad'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
}





function IcononosAscendente($iconos) {
    usort($iconos, function ($a, $b) {
        return $a['likes'] - $b['likes'];
    });

    echo "<h3> Ordenado por ascendente:</h3><br>";

    echo '<div class="row">';
    foreach ($iconos as $icono) {
        echo '<div class="col">';
        echo '<img style="width:100px" src="img/' . $icono['nombre_archivo'] . '.png" alt="' . $icono['nombre_archivo'] . '">';
        echo '<p>Tag Name: ' . $icono['tag_name'] . '</p>';
        echo '<p>Likes: ' . $icono['likes'] . '</p>';
        echo '<p>Ciudad: ' . $icono['ciudad'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
}
function IcononosDescendente($iconos) {
    usort($iconos, function ($a, $b) {
        return $b['likes'] - $a['likes'];
    });

    echo "<h3> Ordenado por Decendente:</h3><br>";

    echo '<div class="row">';
    foreach ($iconos as $icono) {
        echo '<div class="col">';
        echo '<img style="width:100px" src="img/' . $icono['nombre_archivo'] . '.png" alt="' . $icono['nombre_archivo'] . '">';
        echo '<p>Tag Name: ' . $icono['tag_name'] . '</p>';
        echo '<p>Likes: ' . $icono['likes'] . '</p>';
        echo '<p>Ciudad: ' . $icono['ciudad'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
}

session_start();
$_abdullah["favcolor"] = "green";
$_animal["favanimal"] = "cat";

?>