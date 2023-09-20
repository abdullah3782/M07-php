<?php
$age = ["Peter" => 35,
        "John" => 13,
        "Alice" => 15,
];

function show_age() {

global $ages;

foreach ($ages as $age) {
	echo $age . '<br>';
    }
}

function arrays() {

    $colors = ['red', 'green', 'blue'];

foreach ($colors as $color) {
	echo $color . '<br>';
    }

}
function main(): void {

    //local vars
    $array1 = arrays();
    print($array1);
    $array2 = show_age();
    print($array2);
}

main();
?>