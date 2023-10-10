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
<nav class="navbar navbar-expand-lg" style="background-color: #fff34a;" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="nav-link " id="log" ><a class="nav-link" href="home.php">Exercici 1</a></button>
            </li>
            <li class="nav-item">
                <button class="nav-link " id="log" ><a class="nav-link" href="home.php">Exercici 2</a></button>
            </li>
            <li>
                <button class="nav-link " id="log" ><a class="nav-link" href="home.php">Exercici 3</a></button>
            </li>
        </ul>

    </div>
</nav>
<br>
<form method="post">
    <button type="submit">Tiremos el dado !</button>
</form>

<?php
if (isset($_SESSION['totalTiradas'])) {

    $totalTiradas = $_SESSION['totalTiradas'];
    echo "Total de las tiradas: $totalTiradas";
}
?>

<?php
session_start();

function jugador1() {
    $dado1 = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];
    $dado2 = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];   
    $i1 = rand(0, count($dado1)-1);
    $i2 = rand(0, count($dado2)-1);
    echo '<div>';
    echo '<h3>Jugador 1</h3>';
    echo '<img src="'.$dado1[$i1] . '">';
    echo '<img src="'.$dado2[$i2] . '">';
    echo '</div>';
    $i1 ++;
    $i2 ++;

    return $i1 + $i2;
}


function jugador2() {
    $dado1 = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];
    $dado2 = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];
    
    $i1 = rand(0, count($dado1) - 1);
    $i2 = rand(0, count($dado2) - 1);

    echo '<div>';
    echo '<h3>Jugador 2</h3>';
    echo '<img src="'.$dado1[$i1] . '">';
    echo '<img src="'.$dado2[$i2] . '">';
    echo '</div>';
    $i1 ++;
    $i2 ++;

    return $i1 + $i2;
}




function jugador3() {
    $dado1 = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];
    $dado2 = ['dado1.jpg','dado2.jpg','dado3.jpeg','dado4.png','dado5.jpeg','dado6.png'];
    
    $i1 = rand(0, count($dado1) - 1);
    $i2 = rand(0, count($dado2) - 1);

    echo '<div>';
    echo '<h3>Jugador 3</h3>';
    echo '<img src="'.$dado1[$i1] . '">';
    echo '<img src="'.$dado2[$i2] . '">';
    echo '</div>';
    $i1 ++;
    $i2 ++;

    return $i1 + $i2;
}



function main(): void {
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    if (!isset($_SESSION['tiradas'])) {
        $_SESSION['tiradas'] = 0;
    }

    if (!isset($_SESSION['puntos1'])) {
        $_SESSION['puntos1'] = 0;
    }

    if (!isset($_SESSION['puntos2'])) {
        $_SESSION['puntos2'] = 0;
    }

    if (!isset($_SESSION['puntos3'])) {
        $_SESSION['puntos3'] = 0;
    }

    if (!isset($_SESSION['puntos'])) {
        $_SESSION['puntos'] = 0;
    }

    if ($_SESSION['tiradas'] < 5) {
        $dado1 = jugador1();
        $dado2 = jugador2();
        $dado3 = jugador3();
    


        if ($dado1 > $dado2 && $dado1 > $dado3) {
          
            $_SESSION['puntos1'] +=1;

        } else if ($dado1 < $dado2  && $dado3 < $dado2) {
            
            $_SESSION['puntos2'] +=1;
        

        } else if ($dado3 > $dado2  && $dado3 > $dado1) {
            $_SESSION['puntos3'] +=1;
       

        } else if ($dado1 == $dado2 && $dado2 == $dado3) {
            $_SESSION['puntos3'] +=1;
            $_SESSION['puntos2'] +=1;
            $_SESSION['puntos1'] +=1;

        }else if ($dado1 == $dado2 ) {
            $_SESSION['puntos2'] +=1;
            $_SESSION['puntos1'] +=1;

        }else if ($dado3 == $dado2 ) {
            $_SESSION['puntos3'] +=1;
            $_SESSION['puntos2'] +=1;
        

        }else if ($dado3 == $dado1 ) {
            $_SESSION['puntos3'] +=1;
            $_SESSION['puntos1'] +=1;

        }









        $_SESSION['tiradas']++;

        echo "Tirada: $dado1<br>";
        echo "Tirada: $dado2<br>";
        echo "Tirada: $dado3<br>";

        echo "Puntos totales del jugador 1: {$_SESSION['puntos1']}<br>";
        echo "Puntos totales del jugador 2: {$_SESSION['puntos2']}<br>";
        echo "Puntos totales del jugador 3: {$_SESSION['puntos3']}<br>";
        echo "Tiradas restantes: " . (5 - $_SESSION['tiradas']) . "<br>";

        $_SESSION['puntos']++;
    }   else {

        echo "Juego finalizado<br>";

        if ($_SESSION['puntos2'] > $_SESSION['puntos1']) {

            echo "Ha ganado el jugador 2<br>";
        } else if ($_SESSION['puntos1'] > $_SESSION['puntos2']){

            echo "Ha ganado el jugador 1<br>";

        }
        
        else if ($_SESSION['puntos3'] > $_SESSION['puntos2']){

            echo "Ha ganado el jugador 3<br>";
 
        }








        echo "Puntos totales: {$_SESSION['puntos']}<br>";
        session_unset(); // Reiniciar el juego al recargar la página
    }
}

main();
?>

</body>
</html>
