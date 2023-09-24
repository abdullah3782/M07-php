<? php 
    require_once './functions.php';
    myHeader();
    myMenu();
?>

<body>
    <?php

    //Main
    //----------------------------------------------------------------
    function main(): void
    {
        echo "<h2>Jugador 1</h2>";
        $num1 = obtenerNumeroAleatorio();
        echo "<img src=" . obtenerImagenDado($num1) . " stlye='width 250px' alt='Dado'>";
        
        echo "<h2>Jugador 2</h2>";
        $num2 = obtenerNumeroAleatorio();
        echo "<img src=" . obtenerImagenDado($num2) . " alt='Dado'>";
        
        echo decidirGanador($num1, $num2);
    }

    //Web Code
    //----------------------------------------------------------------
    main();
    
    ?>
</body>

</html>