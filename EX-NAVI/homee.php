<?php



myHeader();
myMenu();

?>
<?php
session_start();
?>
<body>
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>
    <br><h1>WELCOME</h1><hr><br>
    <h2>
        <<<<< CHRISTMAS CARD >>>>>
    </h2>

    <?php

$icono=array();

  $icono [] = "1.png";
  $icono [] =  "2.png"; 
  $icono [] = "3.png"; 
  $icono [] = "4.png";
  $icono [] =  "5.png";
  $icono [] =  "6.png";
  $icono [] =  "7.png";
  $icono [] =  "8.png";
  $icono [] = "9.png";
  $icono [] = "10.png";
  $icono [] = "11.png";
  $icono [] = "12.png";
 
 foreach($icono as $icono){
    echo '<img src="' . $icono . '" alt= width="100" height="100">';

 }

    myFooter();
    ?>
</body>