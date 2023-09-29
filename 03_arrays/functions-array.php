<?php
require_once './data.php';

//ARRAY FUNCTIONS

//Obtenim un número random amb la funció rand().
function randNumber(int $number): int{
    return rand(1,$number);
}

/* loadArray
creates an image route array of a given length

@ int $long: length of the array

returns: array
*/
function loadArray(int $long): array{
    $array=[];

    for($i = 1; $i < $long+1; $i++){
        $value = "images/".randNumber(20).".png";
        array_push($array, $value);
    }

    return $array;
}

/* addArrayElements
adds extra images at the end of an existing image route array

generates a random number and picks the corresponding image route (ex: images/1.png). it then adds the random image route to the array

@ array $array: the array which will have elements added. the function updates the array globally
@ int $elementsToAdd: number of images to add

returns: void
*/
function addArrayElements(array &$array, int $elementsToAdd): void{
    $i = randNumber(20);
    $value = "images/".$i.".png";
    for($i = 0; $i < $elementsToAdd; $i++){
        array_push($array, $value);
    }
}

/* deleteArrayElements
deletes images from the start of an existing image route array

@ array $array: the array which will have elements deleted. the function updates the array globally
@ int $elementsToAdd: number of images to delete

returns: void
*/
function deleteArrayElements(array &$array, int $elementsToDelete): void{
    for($i = 0; $i < $elementsToDelete; $i++){
        array_shift($array);
    }
}

/* printArray
prints an array using print_r

@ array $array: the array which will be printed.

returns: void
*/
function printArray(mixed $array): void{
    echo "<pre>" . print_r($array, true) . "</pre>";
}

/* showImages
shows the images of an array containing image routes as elements echoing html code

@ array $array: the array containing the images that will be shown
@ int $width: width of the images shown

returns: void
*/
function showImages(array $array, int $width): void{
    foreach($array as $image){
        echo "<img src='".$image."' width=".$width."px>";
    }
}

/* showImagesHome
shows the images of an array containing image routes as elements echoing html code with an special format

@ array $array: the array containing the images that will be shown
@ int $width: width of the images shown. default value = 120

returns: void
*/
function showImagesHome(array $array, int $width = 120): void{
    foreach($array as $image){
        echo '<div class="col-md-3">';
        echo "<img src='".$image."' width=".$width."px>";
        echo '</div>';
    }
}
?>