
<?php
    $arrayrrayIndexado = ["M06", "M07", "M08", "M09"];
    $arrayrrayAsociative1 = [
        "Asignaturas de primero" => "M01, M02, M03, M04, M05, M10, M11",
        "Asignaturas de segundo" => "M06, M07, M08, M09, M012, M13"
    ];
    $arrayrrayAsociative2 = [
        "Asignaturas de primero" => ["M01", "M02", "M03", "M04", "M05", "M10", "M11"],
        "Asignaturas de segundo" => ["M06", "M07", "M08", "M09", "M12", "M13"]
    ];
    ?>
    
<?php 

//definimos functions with the 'function' keyword

//Print Line

//Print Line. Appends en EOL at the end
//--------------------------------------
function println($something){

echo $something;
echo "<br>";

}


//Global
$is_ok = true;  //int
$num = 23;      //int
$price = 56.25; 
$text ="DAW2";



//Main
//----------------------------------------
println("Good morning. Print variable:");
println("--------------------------------");
println($is_ok);
println($num);
println($price);
println($text);

?>