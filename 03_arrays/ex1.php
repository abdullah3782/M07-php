<?php
    require_once './functions-structure.php';
    require_once './functions-array.php';
    require_once './data.php';
?>

<head>
    <!-- HEAD Code -->
    <?php
        println(myHeader());
    ?>
</head>
<body>
    <!-- WEB Code -->
    <?php
        println(myMenu());
    ?>

    <?php
        $numberOfImages = randNumber(20);
        $images=loadArray($numberOfImages);
        $imageWidth = 80;
        
        echo '<p>Mostrant '.$numberOfImages.' imatges... <br></p>';
        showImages($images, $imageWidth);

        echo '<hr>';
        echo '<p>Eliminant una imatge de l\'array... <br></p>';
        deleteArrayElements($images, 1);
        showImages($images,$imageWidth);

        echo '<hr>';
        echo '<p>Afegint una imatge aleatòria a l\'array... <br></p>';
        addArrayElements($images, 1);
        showImages($images,$imageWidth);        
    ?>

    <?php
    println(myFooter());
    ?>
    

</body>

</html>