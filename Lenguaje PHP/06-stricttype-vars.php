<?php 

declare (strict_types=1);
//PHP is an implicity typed language
//But you can explicit types in funtion declaration
function println($something){

    echo $something;
    echo "<br>";
    
    }
//---------------------------------
//Sumar 2 integers 
function sum_ints(int $num1,int $num2): int{

$result = $num1 + $num2;
return $result;
}

//TO DO: ADD 2 FLOAT 
function two_floats (float $num1,float $num2): float{

    $result = $num1 + $num2;
    return $result;
    }

//TO DO: Add_newline: string + return
function add_newline (string $string1): string {

    $result = $string1;
    return $result;
    }






//Main function 
//---------------
function main(): void {

    //local vars
    $num = sum_ints(3,4);
    $float = two_floats(2.2, 2.2);
    $string = add_newline ("Hola");
    //print
   println("Varaibles");
   println($num);
   println($float);
}


//web code
main();

?>