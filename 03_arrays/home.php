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

    <h1><b>HALLOWEEN CARDS</b></h1><hr>
    
    <div class="container">
        <div class="row">
            <?php
                $images=loadArray(20);
                //printArray($images);
                showImagesHome($images);
            ?>
        </div>
    </div>

    <?php
        println(myFooter());
    ?>
    

</body>

</html>