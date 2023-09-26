<?php
require_once './0901-functions-structure.php';

//Funcion imprime array indexado, 2 modos de impresión: modo lista ($t=0) y modo normal ($t=1)
//------------------------------------------------------------------------------------------------------------
function printArrayByIndex($array, $mode = 1): void
{
    print('<h3>' . '    ** Imprime array INDEXADO ' . '</h3>');
    println('**************************************************************************');
    if ($mode == 0) { //print as a LIST
        echo "<ul>";
        for ($i = 0; $i < count($array); $i++) {
            echo "<li>" . $array[$i] . "</li>";
        }
        echo "<ul>";
        println('--------------------------------<br>');
    } else if ($mode == 1) { //print as a PARAGRAF
        for ($i = 0; $i < count($array); $i++) {
            println($array[$i]);
        }
        println('--------------------------------<br>');
    }
}

//Funcion imprime array asociativo 
//------------------------------------------------------------------------------------------------------------



//Funcion imprime array asociativo - multidimensional
//------------------------------------------------------------------------------------------------------------
function printArrayMultidimensionalByKey($array)
{
    print('<h3>' . '   **  Imprime array ASOCIATIVO - multidimensional' . '</h3>');
    println('**************************************************************************');
    foreach ($array as $clave => $valor) {
        println($clave);
        printArrayByIndex($valor, 1);
    }
    println('--------------------------------<br>');
}

//Función print Array Pretty with print_r
function print_Array_Pretty(mixed $array){
    echo "<pre>" . print_r($array, true) . "</pre>";
}

//Función imprime array CON FUNCIONES: PRINT_R Y VAR_DUMP
//------------------------------------------------------------------------------------------------------------



// Print HTML my HEADER & my NAVBAR
myHeader();
myMenu();
?>

<body>
    <!-- Declaración de variables PHP-->
    <?php

    $arrayrrayAsociative2 = [
        "Asignaturas de primero" => ["M01", "M02", "M03", "M04", "M05", "M10", "M11"],
        "Asignaturas de segundo" => ["M06", "M07", "M08", "M09", "M12", "M13"]
    ];
    ?>

    <!-- WEB Code-->

    <hr>
    <?php
   
    printArrayMultidimensionalByKey($arrayrrayAsociative2);


    //Print myFooter
    myFooter();
    ?>


</body>

</html>