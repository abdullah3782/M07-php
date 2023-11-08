<?php

function myHeader(){
    $header = <<<CABECERA
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Array Stickers</title>

            <!--CDN Bootstrap-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </head>
        
    CABECERA;

    echo $header;
}

function myMenu(){

    $menu = <<<MENU
            
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
                        <li class="nav-item">
                        <a class="nav-link" href="ejercicio5.php">ejercicio 5</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php">login</a>
                </li>
                        </ul>

                        
                </div>
                

    MENU;
    echo $menu;
    echo '<hr>';
    
}



function myMenuLoged() {
    $menu = <<<MENU
        <div class="menu">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listarjugadores.php">Listar Jugadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="frases.php">Frases Motivadoras</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="votarFraseMotivadora.php">Votar Frase Motivadora</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="recuentodevotos.php"> Recuento de Votos</a>
            </li>
            </ul>
        </div>
MENU;
    echo $menu;
    echo '<hr>';
}




function myFooter(){
    $footerHTML = <<<MYFOOTER
        <footer>
            <hr>
            <p>
            @Provençana
            </p>
        </footer>
    MYFOOTER;
    echo $footerHTML;
    date_default_timezone_set('Europe/Madrid');

    $fechaActual = date("d-m-Y");
    $horaActual = date("h:i:s");

    echo "La fecha es: $fechaActual y la hora es $horaActual " ;
}

function mostar_img_array(array $array){
    echo '<h2>Muestra pares</h2>';
    echo '<div class=row>';

    echo "<h3> Logos Aleatorios </h3><br>" ;
    foreach($array as $img){
        echo "<img style='width:100px' src='img/" . $img . ".png' alt='" . $img . "' />";
    }
}


//---------------------EJERCICIO1--------

?>


