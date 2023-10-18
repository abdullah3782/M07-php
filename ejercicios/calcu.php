<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="menu">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ejercicio1.php">ejercicio 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ejercicio2.php">ejercicio 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ejercicio3.php">ejercicio 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ejercicio4.php">ejercicio 4</a>
            </li>
        </ul>
    </div>

    <?php
    if (isset($_GET['numero'])) {
        $numero = intval($_GET['numero']); // Convierte la cadena a entero

        echo "<table class='table'>";
        echo "<thead><tr><th>Multiplicador</th><th>Resultado</th></tr></thead>";
        echo "<tbody>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }

        echo "</tbody>";
        echo "</table>";
    }
    ?>

    <form action="" method="get">
        <div>
            Escoge un numero entre 0 y 20 : <input type="text" name="numero" placeholder="pon tu edad" value="<?php echo isset($_GET['numero']) ? $_GET['numero'] : ''; ?>">
        </div>
        <div>
            <input type="submit" value="Mostrar Tabla">
        </div>
    </form>
</body>

</html>
