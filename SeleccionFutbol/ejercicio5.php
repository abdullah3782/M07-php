<?php
require __DIR__ . '/functions.php'; 
myHeader();
myMenu();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
    <title>Listado de Entrenadores y Países</title>
    <style>
h1 {
    text-align: center;
}

    </style>
</head>
<body>
    <h1>Listado de Entrenadores</h1>
    <div>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Equipo</th>
                <th>Fecha de Nacimiento</th>
                <th>Años de Entrenador</th>
                <th>Nivel de Liderazgo</th>
                <th>País</th>
            </tr>
            <?php
         
            $file = fopen('entrenadores.csv', 'r');  
            while (($line = fgetcsv($file, 1000, ";")) !== FALSE) {
                echo "<tr>";
                foreach ($line as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            fclose($file);
            ?>
        </table>
    </div>

    <h1>Listados de Países y Capitales</h1>
    <div>
        <table>
            <tr>
                <th>País</th>
                <th>Capital</th>
            </tr>
            <?php
            $file_paises = fopen('paises.csv', 'r');
            while (($line = fgetcsv($file_paises, 1000, ";")) !== FALSE) {
                echo "<tr>";
                foreach ($line as $index => $cell) {
                    $borderStyle = ($index === count($line) - 2) ? 'border-right: 1px solid black;' : '';
                    echo "<td style='{$borderStyle}'>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            fclose($file_paises);
            ?>
        </table>
    </div>
</body>
</html>
