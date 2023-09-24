<?php
session_start(); // Inicia la sesión o la reanuda si ya existe

function jugador1() {
    $dado = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];
    $i = rand(0, count($dado) - 1);
    $tirada = $i + 1; // Suma 1 porque los índices comienzan desde 0, pero el dado comienza desde 1.
    print '<img src="'.$dado[$i]. '">';
    return $tirada;
}

if (!isset($_SESSION['totalTiradas'])) {
    $_SESSION['totalTiradas'] = 0;
}

if (!isset($_SESSION['tiradasRealizadas'])) {
    $_SESSION['tiradasRealizadas'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Realiza una tirada
    $resultado = jugador1();
    
    // Suma la tirada actual al total
    $_SESSION['totalTiradas'] += $resultado;
    
    // Lleva un registro de las tiradas realizadas
    $_SESSION['tiradasRealizadas']++;
    
    // Si se han realizado 3 tiradas, reinicia el total
    if ($_SESSION['tiradasRealizadas'] >= 4) {
        $_SESSION['totalTiradas'] = 0;
        $_SESSION['tiradasRealizadas'] = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/vueling.css">
    <title>JUEGO 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #faa200;">
        <h1><a class="navbar-brand" href="#">JUEGO DEL DADO</a></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="menu">
            <ul>
                <li>
                    <a href="home.php">Home </a>
                </li>
                <li>
                    <a href="juego1.php">juego1 </a>
                </li>
                <li>
                    <a href="juego2.php">juego2 </a>
                </li>
                <li>
                    <a href="juego3.php">juego3 </a>
                </li>
            </ul>
        </div>
    </nav>

    <form method="post">
        <button type="submit">Tirar el dado</button>
    </form>
    
    <?php
    if (isset($_SESSION['totalTiradas'])) {
    
        $totalTiradas = $_SESSION['totalTiradas'];
        echo "Total de las tiradas: $totalTiradas";
    }
    ?>
</body>
</html>
