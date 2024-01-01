<?php

class ACBProyecto
{
    private $clubes;
    private $jugadores;

    public function __construct()
    {
        $this->clubes = file('clubs.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $this->jugadores = $this->leerJugadores();
    }

    public function mostrarClubes()
    {
        echo '<ul>';
        foreach ($this->clubes as $club) {
            $imagenPath = "images/logos_clubs/{$club}.png";
            echo "<li><a href='index.php?club={$club}'><img src='{$imagenPath}' alt='{$club}' width='100' height='100'></a></li>";
        }
        echo '</ul>';
    }

    public function mostrarJugadores($club)
    {
        echo "<h2>Jugadores de {$club}</h2>";

        $clubSeleccionado = trim($club);

        echo "<p>Club seleccionado: {$clubSeleccionado}</p>";

        if (isset($this->jugadores[$clubSeleccionado])) {
            echo '<table border="1">';
            echo '<tr><th>Nombre</th><th>Samarreta</th><th>Posición</th><th>Nacionalidad</th><th>Licencia</th><th>Altura</th><th>Edad</th><th>Temp.</th><th>Foto</th></tr>';

            foreach ($this->jugadores[$clubSeleccionado] as $jugador) {
                echo '<tr>';
                echo "<td>{$jugador['NOM']}</td>";
                echo "<td>{$jugador['SAMARRETA']}</td>";
                echo "<td>{$jugador['POSICIÓN']}</td>";
                echo "<td>{$jugador['NACIONALIDAD']}</td>";
                echo "<td>{$jugador['LICENCIA']}</td>";
                echo "<td>{$jugador['ALTURA']}</td>";
                echo "<td>{$jugador['EDAD']}</td>";
                echo "<td>{$jugador['TEMP.']}</td>";
                echo "<td><img src='images/jugadores/{$jugador['FOTO']}' alt='{$jugador['NOM']}' width='50' height='50'></td>";
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo "<p>No se encontraron jugadores para el club {$clubSeleccionado}</p>";
        }
    }

    private function leerJugadores()
    {
        $jugadores = [];

        // Ruta al archivo lligaACB.csv
        $archivoCSV = 'lligaACB.csv';

        if (file_exists($archivoCSV)) {
            $datos = array_map('str_getcsv', file($archivoCSV));

            // Obtener las cabeceras (nombres de las columnas)
            $cabeceras = array_shift($datos);

            foreach ($datos as $fila) {
                $jugador = array_combine($cabeceras, $fila);
                $club = $jugador['CLUB'];

                // Agregar el jugador al club correspondiente
                $jugadores[$club][] = $jugador;
            }
        } else {
            echo "<p>No se encontró el archivo CSV</p>";
        }

        return $jugadores;
    }
}

// Crear una instancia de la clase ACBProyecto
$proyectoACB = new ACBProyecto();

// Mostrar los clubes
$proyectoACB->mostrarClubes();

// Mostrar los jugadores del club seleccionado si se ha proporcionado el parámetro 'club' en la URL
if (isset($_GET['club'])) {
    $clubSeleccionado = $_GET['club'];
    $proyectoACB->mostrarJugadores($clubSeleccionado);
}

?>
