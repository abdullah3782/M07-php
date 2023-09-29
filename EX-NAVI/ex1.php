<?php
    require_once './0901-functions-structure.php';
    require_once './0902-arrays-print-functions-PHP.php';
    require_once './data.php';
?>
<head>
<?php
println(myHeader());
?>
</head>

<body>

<?php
println(myMenu());
?>

<?php
$numberOfImages = randNumber(12);
$img=loadArray($numberOfImages);
$imgWidth = 80;


echo '<p>Mostrant '.$numberOfImages.' img... <br></p>';
        showImages($img, $imgWidth);

echo '<hr>';     

echo '<p>Eliminant una imatge de la array... <br></p>';
deleteArrayElements($img, 1);
showImages($img, $imgWidth);

echo '<hr>';     
echo '<p>Agregada una imatge de la array... <br></p>';
addArrayElements($img, 1);
showImages($img, $imgWidth);
?>
<?php
    println(myFooter());
    ?>
</body>
</html>