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





//Función print Array Pretty with print_r
function print_Array_Pretty(mixed $array){
    echo "<pre>" . print_r($array, true) . "</pre>";
}

//Función imprime array CON FUNCIONES: PRINT_R Y VAR_DUMP
//------------------------------------------------------------------------------------------------------------
function printArrayByPHPFunctions($array)
{
    print('<h2>' . '<br>' . '-----Testing functions by print_r($myArray) -------' . '</h2>');
    print_Array_Pretty($array);

    print('<h2>' .  '<br>' . '-----Testing functions by var_dump($myArray)-------' . '</h2>');
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
}


// Print HTML my HEADER & my NAVBAR
myHeader();
myMenu();
?>

<body>
    <!-- Declaración de variables PHP-->
    <?php
    $arrayrrayIndexado = ["M06", "M07", "M08", "M09"];
    ?>

    <!-- WEB Code-->
    <h2>
        <<<<< Arrays indexados>>>>>
    </h2>
    <?php printArrayByIndex($arrayrrayIndexado, 1); ?>

    <br><br>
    
    <hr>
    <?php
   // printArrayByKey($arrayrrayAsociative1);
   // printArrayMultidimensionalByKey($arrayrrayAsociative2);
   // printArrayByPHPFunctions($arrayrrayAsociative1);

    //Print myFooter
    myFooter();
    ?>


</body>

</html>