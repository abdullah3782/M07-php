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