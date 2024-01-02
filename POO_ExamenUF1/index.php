<?php
session_start();

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
        // Incrementar el contador de visitas en cada carga de la página
        $_SESSION['visitas'] = isset($_SESSION['visitas']) ? $_SESSION['visitas'] + 1 : 1;

        echo "<p>Visitas: {$_SESSION['visitas']}</p>";

        // Obtener el valor de la cookie 'estilo' si está configurada
        $estilo = isset($_COOKIE['estilo']) ? $_COOKIE['estilo'] : '';

        echo "<style>";
        // Aplicar estilos según el valor de la cookie 'estilo'
        switch ($estilo) {
            case 'BARÇA':
                echo "body { background-color: blue; font-size: 20px; }";
                break;
            case 'MADRID':
                echo "body { background-color: white; font-size: 30px; }";
                break;
            case 'VALENCIA':
                echo "body { background-color: orange; font-size: 40px; }";
                break;
            default:
                // Estilo predeterminado si no hay cookie o el valor no coincide
                echo "body { background-color: white; font-size: 16px; }";
        }
        echo "</style>";

        echo '<ul>';
        foreach ($this->clubes as $club) {
            $imagenPath = "images/logos_clubs/{$club}.png";
            echo "<li><a href='index.php?club={$club}'><img src='{$imagenPath}' alt='{$club}' width='100' height='100'></a></li>";
        }
        echo '</ul>';
    }

    public function mostrarJugadores()
    {
        echo "<h2>Todos los jugadores</h2>";

        echo '<table border="1">';
        echo '<tr><th>Club</th><th>Nombre</th><th>Samarreta</th><th>Posición</th><th>Nacionalidad</th><th>Licencia</th><th>Altura</th><th>Edad</th><th>Temp.</th><th>Foto</th><th>Acción</th></tr>';

        foreach ($this->jugadores as $club => $jugadoresClub) {
            foreach ($jugadoresClub as $jugador) {
                echo '<tr>';
                echo "<td>{$club}</td>";
                echo "<td>{$jugador['NOM']}</td>";
                echo "<td>{$jugador['SAMARRETA']}</td>";
                echo "<td>{$jugador['POSICIÓN']}</td>";
                echo "<td>{$jugador['NACIONALIDAD']}</td>";
                echo "<td>{$jugador['LICENCIA']}</td>";
                echo "<td>{$jugador['ALTURA']}</td>";
                echo "<td>{$jugador['EDAD']}</td>";
                echo "<td>{$jugador['TEMP.']}</td>";
                echo "<td><img src='images/jugadores/{$jugador['FOTO']}' alt='{$jugador['NOM']}' width='50' height='50'></td>";
                echo "<td><a href='index.php?verJugador=1&foto={$jugador['FOTO']}&nombre={$jugador['NOM']}'>Ver jugador</a></td>";
                echo '</tr>';
            }
        }

        echo '</table>';
    }

    public function mostrarInfoJugador()
    {
        if (isset($_GET['verJugador'])) {
            $fotoJugador = $_GET['foto'];
            $nombreJugador = $_GET['nombre'];

            echo "<h2>Información del Jugador</h2>";
            echo "<p>Nombre: {$nombreJugador}</p>";
            echo "<img src='images/jugadores/{$fotoJugador}' alt='{$nombreJugador}' width='150' height='150'>";
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

// Mostrar la información del jugador si se ha proporcionado el parámetro 'verJugador' en la URL
$proyectoACB->mostrarInfoJugador();

// Mostrar los jugadores del club seleccionado si se ha proporcionado el parámetro 'club' en la URL
if (isset($_GET['club'])) {
    $clubSeleccionado = $_GET['club'];
    $proyectoACB->mostrarJugadores($clubSeleccionado);
}
?>
