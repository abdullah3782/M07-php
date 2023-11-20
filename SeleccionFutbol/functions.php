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


function print_Array_Multidimensional_content(array $array)
{
    // Mostrar el array multidimensional
    foreach ($array as $fila) {
        foreach ($fila as $valor) {
            echo $valor . " ";
        }
        echo "<br>";
    }
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





/* ------------------------------------------- Funciones CSV  ---------------------------------------------------------------- */
/** 
 *Función que sobreescribe el contenido de un fichero csv i lo pone vacio
 * @param string $filename -  nombre de el fichero csv que queremos dejar vacio
 */
function clear_csv(string $filename)
{
    // open csv file for writing
    $f_write = fopen($filename, 'w'); // w: write | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // Creamos un array vacio que luego utilizaremos para sobreescribir el csv
    $data = [];

    // write data in csv
    foreach ($data as $row) {
        fputcsv($f_write, $row);
    }

    // close the file
    fclose($f_write);
}

/** 
 *Función que lee contenido de un fichero csv i lo muestra
 * @param string $filename - nombre de el fichero csv en el que queremos leer la informacion
 * @param boolean $table - booleano donde decimos si queremos mostrarlo en tabla o no
 */
function read_info_csv_with_table_list(string $filename, bool $table)
{
    // Leemos los datos que habian anteriormente para no sobreescibir el fichero
    $f = fopen($filename, 'r'); // r: read | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // Si no a podido abrir el fichero
    if ($f === false) {
        die('Error opening the file ' . $filename);
    }

    // array donde guardaremos la informacion de el csv
    $data = [];

    // Leemos el fihcero csv i ponemos los datos en el array data para luego mostrarlos o usarlos
    while (($row = fgetcsv($f)) !== false) {
        $data[] = $row;
    }

    if ($table) {
        // Mostramos el contenido del csv en formato tabla
        //Formato tabla 
        echo "<table class='table'>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Equipo</th>";
        echo "<th>Fecha de nacimiento</th>";
        echo "<th>Años de entrenamiento</th>";
        echo "<th>Nivel de liderazgo</th>";
        echo "<th>País</th>";
        echo "</tr>";

        foreach ($data as $entrenador) {
            echo "<tr>";
            echo "<td>" . $entrenador[0] . "</td>";
            echo "<td>" . $entrenador[1] . "</td>";
            echo "<td>" . $entrenador[2] . "</td>";
            echo "<td>" . $entrenador[3] . "</td>";
            echo "<td>" . $entrenador[4] . "</td>";
            echo "<td>" . $entrenador[5] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        // Mostramos el contenido del csv en formato lista 
        foreach ($data as $entrenador) {
            echo "<ul>";
            echo "<li><b>Nombre:</b> " . $entrenador[0] . "</li>";
            echo "<li><b>Equipo:</b> " . $entrenador[1] . "</li>";
            echo "<li><b>Fecha de nacimiento:</b> " . $entrenador[2] . "</li>";
            echo "<li><b>Años de entrenamiento:</b> " . $entrenador[3] . "</li>";
            echo "<li><b>Nivel de liderazgo:</b> " . $entrenador[4] . "</li>";
            echo "<li><b>País:</b> " . $entrenador[5] . "</li>";
            echo "</ul>";
            echo "<hr>";
        }
    }

    // close the file
    fclose($f);

}


/** 
 *Función que lee contenido de un fichero csv i retorna el contenido
 * @param string $filename - nombre de el fichero csv en el que queremos leer la informacion
 */
function read_info_csv(string $filename)
{
    // Leemos los datos que habian anteriormente para no sobreescibir el fichero
    $f = fopen($filename, 'r'); // r: read | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // Si no a podido abrir el fichero
    if ($f === false) {
        die('Error opening the file ' . $filename);
    }

    // array donde guardaremos la informacion de el csv
    $data = [];

    // Leemos el fihcero csv i ponemos los datos en el array data para luego mostrarlos o usarlos
    while (($row = fgetcsv($f)) !== false) {
        $data[] = $row;
    }

    // Mostramos el contenido de el csv
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    // close the file
    fclose($f);

}

/** 
 *Función que lee contenido de un fichero csv i retorna el contenido
 * @param string $filename - nombre de el fichero csv en el que queremos leer la informacion
 */
function read_info_csv_with_return(string $filename)
{
    // Leemos los datos que habian anteriormente para no sobreescibir el fichero
    $f = fopen($filename, 'r'); // r: read | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // Si no a podido abrir el fichero
    if ($f === false) {
        die('Error opening the file ' . $filename);
    }

    // array donde guardaremos la informacion de el csv
    $data = [];

    // Leemos el fihcero csv i ponemos los datos en el array data para luego mostrarlos o usarlos
    while (($row = fgetcsv($f)) !== false) {
        $data[] = $row;
    }

    // close the file
    fclose($f);

    //retornamos el contenido
    return $data;
}

/** 
 *Función que escribe contenido en un fichero csv
 * @param string $filename - nombre de el fichero csv en el que queremos escribir informacion
 * @param array $data_input - array con la informacion que querenos ponerle al fichero
 */
function write_info_csv(string $filename, array $data_input)
{
    // Leemos los datos que habian anteriormente para no sobreescibir el fichero
    $f = fopen($filename, 'r'); // r: read | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // Si no a podido abrir el fichero
    if ($f === false) {
        die('Error opening the file ' . $filename);
    }

    // array donde guardaremos la informacion de el csv
    $data = [];

    // Leemos el fihcero csv i ponemos los datos en el array data para luego mostrarlos o usarlos
    while (($row = fgetcsv($f)) !== false) {
        $data[] = $row;
    }

    // close the file
    fclose($f);


    // Escribimos el nuevo contenido mas el que habia anteriormente
    // open csv file for writing
    $f_write = fopen($filename, 'w'); // w: write | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // Fusionamos los datos que ya habian mas los de ahora
    $data = array_merge($data, $data_input);

    // write data in csv
    foreach ($data as $row) {
        fputcsv($f_write, $row);
    }

    // close the file
    fclose($f_write);
}

/** 
 *Función que sobreescribe en un fichero csv
 * @param string $filename - nombre de el fichero csv en el que queremos escribir informacion
 * @param array $data_input - array con la informacion que querenos ponerle al fichero
 */
function write_info_csv_with_Overwrite(string $filename, array $data_input)
{
    // open csv file for writing
    $f_write = fopen($filename, 'w'); // w: write | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // ponemos la informacion en el array $data que utilizaremos para escribir en el csv
    $data = [];
    $data = array_merge($data, $data_input);

    // write data in csv
    foreach ($data as $row) {
        fputcsv($f_write, $row);
    }

    // close the file
    fclose($f_write);
}




/* ------------------------------------------- Funciones txt ---------------------------------------------------------------- */
/** 
 *Función que lee contenido de un fichero txt linea a linea
 * @param string $filename - nombre de el fichero txt en el que queremos leer la informacion
 */
function read_line_x_line_in_txt(string $filename)
{
    // Leemos los datos que habian anteriormente para no sobreescibir el fichero
    $f = fopen($filename, 'r'); // r: read | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // Si no a podido abrir el fichero
    if (!$f) {
        die('Error opening the file ' . $filename);
    }

    // array donde guardaremos la informacion de cada linea de el txt
    $data = [];

    // Leemos el fihcero txt i mientras que no halla acabado (feof mira si es el final) añade las lineas al array $data
    while (!feof($f)) {
        //si no a acabado el contenido de el txt
        $data[] = fgets($f); // añadimos las lineas a la varible con la informacion de el txt
    }

    // mostramos el contenido de el txt
    print_r($data);

    // cerramos el fichero
    fclose($f);

    // retornamos la informacion
    return $data;
}

/** 
 *Función que lee contenido de un fichero txt
 * @param string $filename - nombre de el fichero txt en el que queremos leer la informacion
 */
function read_data_txt(string $filename)
{
    // Leemos los datos que habian anteriormente para no sobreescibir el fichero
    $f = fopen($filename, 'r'); // r: read | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // Si no a podido abrir el fichero
    if (!$f) {
        die('Error opening the file ' . $filename);
    }

    // array donde guardaremos la informacion de cada linea de el txt
    $data = "";

    $data = fread($f, filesize($filename)); //fread --> leer todo el contenido || filesize --> mira el tamaño del archivo

    // cerramos el fichero
    fclose($f);

    // mostramos el contenido
    echo nl2br($data); //nl2br --> convierte caracteres de nueva línea en <br>

}

/** 
 *Función que lee contenido de un fichero txt linea a linea y lo devuelve
 * @param string $filename - nombre de el fichero txt en el que queremos leer la informacion
 */
function read_data_txt_with_return(string $filename)
{
    // Leemos los datos que habian anteriormente para no sobreescibir el fichero
    $f = fopen($filename, 'r'); // r: read | view all the permission: https://www.phptutorial.net/php-tutorial/php-open-file/

    // Si no a podido abrir el fichero
    if (!$f) {
        die('Error opening the file ' . $filename);
    }

    // array donde guardaremos la informacion de cada linea de el txt
    $data = [];

    $data = fread($f, filesize($filename)); //fread --> leer todo el contenido || filesize --> mira el tamaño del archivo

    // cerramos el fichero
    fclose($f);

    // retornamos la informacion
    return $data;
}

/** 
 * Función que escribe contenido en un fichero
 * @param string $filename - nombre de el fichero txt en el que queremos leer la informacion
 * @param string $data - contenido de el fichero que queremos añadir
 */
function write_info_txt(string $filename, string $data)
{
    // abrimos el fichero con el permiso 'a'
    $f = fopen($filename, 'a'); // a: no overwrite | view all the permission of the file: https://codigoroot.net/blog/escribir-archivos-de-texto-txt-con-php/ 

    // Si no a podido abrir el fichero
    if (!$f) {
        die('Error opening the file ' . $filename);
    }

    // Hacemos un salto de linea para escribir la nueva frase
    fwrite($f, PHP_EOL); // PHP_EOL = salto de linea

    // Escribimos el contenido en el fichero
    fwrite($f, $data);

    // Cerramos el fichero
    fclose($f);

    // frase para verificar que se nos a añadido el contenido
    echo "Contenido añadido";

    // Redirigimos a la misma paguina para que se actualize i se muestre el texto
    header('Location: frases.php'); //

}




/* ------------------------------------------- Otras Funciones ---------------------------------------------------------------- */
/**
 * Funcion para convertir un string en un array (cada salto de linea en el string es una nueva posicion del array)
 * @param string $data - String que queremos pasar para convertirlo
 * @return mixed $data - string convertido en array
 */
function convert_string_in_array(string $data): array
{
    $data = preg_split('/\R/', $data); /// \R/ --> salto de linea 
    return $data;
}


?>


