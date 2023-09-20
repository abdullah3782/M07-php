<?php
function sum_ints() {

    $colors = ['red', 'green', 'blue'];

foreach ($colors as $color) {
	echo $color . '<br>';
    }

}
function main(): void {

    //local vars
    $dado = sum_ints();
    print($dado);
}

main();
?>