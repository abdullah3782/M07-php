<?php 

declare (strict_types=1);

//Type cast 
//-------------------------
function convert_to_int($input): void {

    var_dump($input);
    echo"<br>";
    var_dump($input + 3);
    //Así se convierte el tipo de dato forzandolo
    var_dump((float) $input);

}


//Main function 
//-------------------------
function main(): void {

    convert_to_int("456");
}



//Web code testing
//--------------------------

main();


?>