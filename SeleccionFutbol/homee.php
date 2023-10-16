<?php
    require_once './0901-functions-structure.php';
    require_once './0902-arrays-print-functions-PHP.php';
    require_once './data.php';
?>
<?php



myHeader();
myMenu();

?>

<body>

    <br><h1>WELCOME</h1><hr><br>
    <h2>
        <<<<< SELECCION ESPANOLA >>>>>
    </h2>

    <?php

$icono=array();

$icono [] = "alejandrobalde";
$icono [] = "ansu_fati";
$icono [] = "carvajal";
$icono [] = "david_garcia";
$icono [] = "david_raya";
$icono [] = "fabian_ruiz";
$icono [] = "fran_garcia";
$icono [] = "gavi";
$icono [] = "kepa";
$icono [] = "laporte";
$icono [] = "martin_zubimendi";
$icono [] = "mikel_merino";
$icono [] = "mikel_oyarzabal";
$icono [] = "navas";
$icono [] = "nico_williams";
$icono [] = "oihan_sancet";
$icono [] = "pau_torres";
$icono [] = "rodrigo";
$icono [] = "thumbnail_le_normand";
$icono [] = "unai_simon";


  
 
 foreach($icono as $icono){
    echo '<img src="' . $icono . '" alt= width="100" height="100">';

 }

    myFooter();
    ?>
</body>